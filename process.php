<?php
// Turn off error reporting for the CSV output
error_reporting(0);
ini_set('display_errors', 0);

// Start output buffering
ob_start();

require_once 'includes/controls.php';

// Define control IDs mapping based on E8 M1 controls
$controlIdMappings = [
    'application_control' => [
        'workstation_control' => '1.01',
        'execution_prevention' => '1.06',
        'temp_folders' => '1.04'
    ],
    'patch_applications' => [
        'asset_discovery' => '2.01',
        'vuln_scanner' => '2.02',
        'online_scanning' => '2.03',
        'app_scanning' => '2.04',
        'critical_patches' => '2.06',
        'non_critical_patches' => '2.07',
        'app_patches' => '2.08',
        'unsupported_services' => '2.12',
        'unsupported_apps' => '2.13'
    ],
    'office_macros' => [
        'disable_unused' => '3.01',
        'block_internet' => '3.08',
        'antivirus_scan' => '3.09',
        'prevent_changes' => '3.11'
    ],
    'application_hardening' => [
        'disable_ie' => '4.01',
        'disable_java' => '4.02',
        'block_ads' => '4.03',
        'prevent_changes' => '4.05'
    ],
    'admin_privileges' => [
        'validate_requests' => '5.01',
        'dedicated_accounts' => '5.04',
        'restrict_internet' => '5.06',
        'limit_services' => '5.07',
        'separate_environments' => '5.09',
        'restrict_unprivileged' => '5.11',
        'restrict_privileged' => '5.12'
    ],
    'patch_os' => [
        'asset_discovery' => '6.01',
        'vuln_scanner' => '6.02',
        'internet_scanning' => '6.03',
        'internal_scanning' => '6.04',
        'critical_patches' => '6.07',
        'non_critical_patches' => '6.08',
        'workstation_patches' => '6.09',
        'unsupported_os' => '6.17'
    ],
    'mfa' => [
        'org_services' => '7.01',
        'third_party_sensitive' => '7.02',
        'third_party_nonsensitive' => '7.03',
        'customer_services_org' => '7.04',
        'customer_services_third' => '7.05',
        'customer_data' => '7.06',
        'mfa_requirements' => '7.10'
    ],
    'backups' => [
        'retention' => '8.01',
        'synchronisation' => '8.02',
        'security' => '8.03',
        'testing' => '8.04',
        'access_control' => '8.05',
        'modification_control' => '8.09'
    ]
];

// E8 M1 Control Mappings and Weights
$controlMappings = [
    // Application Control
    'application_control' => [
        'workstation_control' => ['q1' => 0.4, 'q7' => 0.2],
        'execution_prevention' => ['q1' => 0.3, 'q4' => 0.2],
        'temp_folders' => ['q1' => 0.3, 'q10' => 0.1]
    ],
    
    // Patch Applications
    'patch_applications' => [
        'asset_discovery' => ['q2' => 0.4, 'q10' => 0.1],
        'vuln_scanner' => ['q2' => 0.4],
        'online_scanning' => ['q2' => 0.3, 'q9' => 0.2],
        'app_scanning' => ['q2' => 0.2, 'q10' => 0.2],
        'critical_patches' => ['q2' => 0.2, 'q10' => 0.2],
        'non_critical_patches' => ['q2' => 0.2, 'q10' => 0.2],
        'app_patches' => ['q2' => 0.2, 'q10' => 0.2],
        'unsupported_services' => ['q2' => 0.2, 'q10' => 0.2],
        'unsupported_apps' => ['q2' => 0.2, 'q10' => 0.2]
    ],
    
    // Microsoft Office Macros
    'office_macros' => [
        'disable_unused' => ['q3' => 0.4, 'q7' => 0.1],
        'block_internet' => ['q3' => 0.3, 'q10' => 0.1],
        'antivirus_scan' => ['q3' => 0.4, 'q4' => 0.2],
        'prevent_changes' => ['q3' => 0.2, 'q10' => 0.2]
    ],
    
    // Application Hardening
    'application_hardening' => [
        'disable_ie' => ['q4' => 0.4, 'q7' => 0.2],
        'disable_java' => ['q4' => 0.3, 'q7' => 0.2],
        'block_ads' => ['q4' => 0.4, 'q9' => 0.1],
        'prevent_changes' => ['q4' => 0.2, 'q10' => 0.2]
    ],
    
    // Administrative Privileges
    'admin_privileges' => [
        'validate_requests' => ['q5' => 0.4, 'q6' => 0.2],
        'dedicated_accounts' => ['q5' => 0.3, 'q9' => 0.2],
        'restrict_internet' => ['q5' => 0.4, 'q10' => 0.1],
        'limit_services' => ['q5' => 0.3, 'q9' => 0.2],
        'separate_environments' => ['q5' => 0.4, 'q10' => 0.1],
        'restrict_unprivileged' => ['q5' => 0.3, 'q10' => 0.2],
        'restrict_privileged' => ['q5' => 0.4, 'q10' => 0.1]
    ],
    
    // Patch Operating Systems
    'patch_os' => [
        'asset_discovery' => ['q2' => 0.4, 'q7' => 0.2],
        'vuln_scanner' => ['q2' => 0.4],
        'internet_scanning' => ['q2' => 0.3, 'q9' => 0.2],
        'internal_scanning' => ['q2' => 0.3, 'q9' => 0.2],
        'critical_patches' => ['q2' => 0.2, 'q10' => 0.2],
        'non_critical_patches' => ['q2' => 0.2, 'q10' => 0.2],
        'workstation_patches' => ['q2' => 0.2, 'q10' => 0.2],
        'unsupported_os' => ['q2' => 0.2, 'q10' => 0.2]
    ],
    
    // Multi-factor Authentication
    'mfa' => [
        'org_services' => ['q6' => 0.4, 'q5' => 0.2],
        'third_party_sensitive' => ['q6' => 0.4, 'q5' => 0.2],
        'third_party_nonsensitive' => ['q6' => 0.3, 'q9' => 0.2],
        'customer_services_org' => ['q6' => 0.4, 'q9' => 0.2],
        'customer_services_third' => ['q6' => 0.3, 'q9' => 0.2],
        'customer_data' => ['q6' => 0.3, 'q9' => 0.2],
        'mfa_requirements' => ['q6' => 0.2, 'q10' => 0.2]
    ],
    
    // Regular Backups
    'backups' => [
        'retention' => ['q8' => 0.4, 'q10' => 0.1],
        'synchronisation' => ['q8' => 0.4],
        'security' => ['q8' => 0.3, 'q7' => 0.2],
        'testing' => ['q8' => 0.3, 'q10' => 0.2],
        'access_control' => ['q8' => 0.3, 'q7' => 0.2],
        'modification_control' => ['q8' => 0.3, 'q10' => 0.2]
    ]
];

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clear any previous output
    ob_clean();
    
    $responses = [];
    
    // Collect responses (1 for Yes, 0 for No)
    for ($i = 1; $i <= 10; $i++) {
        $responses["q$i"] = (isset($_POST["q$i"]) && $_POST["q$i"] === "yes") ? 1 : 0;
    }
    
    // Calculate control scores and determine if they pass the threshold
    $controlResults = [];
    foreach ($controlMappings as $category => $controls) {
        foreach ($controls as $control => $questionWeights) {
            $controlScore = 0;
            $totalWeight = 0;
            
            foreach ($questionWeights as $question => $weight) {
                $controlScore += $responses[$question] * $weight;
                $totalWeight += $weight;
            }
            
            // Normalize score and determine if control passes (threshold of 0.7 or 70%)
            $normalizedScore = $totalWeight > 0 ? $controlScore / $totalWeight : 0;
            $controlResults[$controlIdMappings[$category][$control]] = ($normalizedScore >= 0.7) ? 1 : 0;
        }
    }
    
    // Generate CSV
    $timestamp = date('Y-m-d-H-i-s');
    $filename = "e8_assessment_$timestamp.csv";
    
    // Set headers for CSV download
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    
    // Create output handle
    $output = fopen('php://temp', 'r+');
    
    // Add BOM for Excel compatibility
    fwrite($output, chr(0xEF).chr(0xBB).chr(0xBF));
    
    // Add headers
    fputcsv($output, ['controlid', 'audit']);
    
    // Add control results in order of control IDs
    ksort($controlResults);
    foreach ($controlResults as $controlId => $auditResult) {
        fputcsv($output, [$controlId, $auditResult]);
    }
    
    // Reset pointer
    rewind($output);
    
    // Read the CSV content
    $csvContent = stream_get_contents($output);
    
    // Close the handle
    fclose($output);
    
    // Clear any buffered output
    ob_clean();
    
    // Output the CSV content
    echo $csvContent;
    exit;
} else {
    // Redirect back to the form if accessed directly
    header('Location: index.php');
    exit;
}
?> 