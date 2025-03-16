<?php

// Define the Essential Eight controls
$e8_controls = [
    // Application Control
    '1.01' => ['class' => 'Application control', 'control' => 'Application control is implemented on workstations.'],
    '1.04' => ['class' => 'Application control', 'control' => 'Application control is applied to user profiles and temporary folders used by operating systems, web browsers and email clients.'],
    '1.06' => ['class' => 'Application control', 'control' => 'Application control restricts the execution of executables, software libraries, scripts, installers, compiled HTML, HTML applications and control panel applets to an organisation-approved set.'],
    
    // Patch Applications
    '2.01' => ['class' => 'Patch applications', 'control' => 'An automated method of asset discovery is used at least fortnightly to support the detection of assets for subsequent vulnerability scanning activities.'],
    '2.02' => ['class' => 'Patch applications', 'control' => 'A vulnerability scanner with an up-to-date vulnerability database is used for vulnerability scanning activities.'],
    '2.03' => ['class' => 'Patch applications', 'control' => 'A vulnerability scanner is used at least daily to identify missing patches or updates for vulnerabilities in online services.'],
    '2.04' => ['class' => 'Patch applications', 'control' => 'A vulnerability scanner is used at least weekly to identify missing patches or updates for vulnerabilities in office productivity suites, web browsers and their extensions, email clients, PDF software, and security products.'],
    '2.06' => ['class' => 'Patch applications', 'control' => 'Patches, updates or other vendor mitigations for vulnerabilities in online services are applied within 48 hours of release when vulnerabilities are assessed as critical by vendors or when working exploits exist.'],
    '2.07' => ['class' => 'Patch applications', 'control' => 'Patches, updates or other vendor mitigations for vulnerabilities in online services are applied within two weeks of release when vulnerabilities are assessed as non-critical by vendors and no working exploits exist.'],
    '2.08' => ['class' => 'Patch applications', 'control' => 'Patches, updates or other vendor mitigations for vulnerabilities in office productivity suites, web browsers and their extensions, email clients, PDF software, and security products are applied within two weeks of release.'],
    '2.12' => ['class' => 'Patch applications', 'control' => 'Online services that are no longer supported by vendors are removed.'],
    '2.13' => ['class' => 'Patch applications', 'control' => 'Office productivity suites, web browsers and their extensions, email clients, PDF software, Adobe Flash Player, and security products that are no longer supported by vendors are removed.'],
    
    // Microsoft Office Macros
    '3.01' => ['class' => 'Restrict Microsoft Office macros', 'control' => 'Microsoft Office macros are disabled for users that do not have a demonstrated business requirement.'],
    '3.08' => ['class' => 'Restrict Microsoft Office macros', 'control' => 'Microsoft Office macros in files originating from the internet are blocked.'],
    '3.09' => ['class' => 'Restrict Microsoft Office macros', 'control' => 'Microsoft Office macro antivirus scanning is enabled.'],
    '3.11' => ['class' => 'Restrict Microsoft Office macros', 'control' => 'Microsoft Office macro security settings cannot be changed by users.'],
    
    // User Application Hardening
    '4.01' => ['class' => 'User application hardening', 'control' => 'Internet Explorer 11 is disabled or removed.'],
    '4.02' => ['class' => 'User application hardening', 'control' => 'Web browsers do not process Java from the internet.'],
    '4.03' => ['class' => 'User application hardening', 'control' => 'Web browsers do not process web advertisements from the internet.'],
    '4.05' => ['class' => 'User application hardening', 'control' => 'Web browser security settings cannot be changed by users.'],
    
    // Restrict Administrative Privileges
    '5.01' => ['class' => 'Restrict administrative privileges', 'control' => 'Requests for privileged access to systems, applications and data repositories are validated when first requested.'],
    '5.04' => ['class' => 'Restrict administrative privileges', 'control' => 'Privileged users are assigned a dedicated privileged user account to be used solely for duties requiring privileged access.'],
    '5.06' => ['class' => 'Restrict administrative privileges', 'control' => 'Privileged user accounts (excluding those explicitly authorised to access online services) are prevented from accessing the internet, email and web services.'],
    '5.07' => ['class' => 'Restrict administrative privileges', 'control' => 'Privileged user accounts explicitly authorised to access online services are strictly limited to only what is required for users and services to undertake their duties.'],
    '5.09' => ['class' => 'Restrict administrative privileges', 'control' => 'Privileged users use separate privileged and unprivileged operating environments.'],
    '5.11' => ['class' => 'Restrict administrative privileges', 'control' => 'Unprivileged user accounts cannot logon to privileged operating environments.'],
    '5.12' => ['class' => 'Restrict administrative privileges', 'control' => 'Privileged user accounts (excluding local administrator accounts) cannot logon to unprivileged operating environments.'],
    
    // Patch Operating Systems
    '6.01' => ['class' => 'Patch operating systems', 'control' => 'An automated method of asset discovery is used at least fortnightly to support the detection of assets for subsequent vulnerability scanning activities.'],
    '6.02' => ['class' => 'Patch operating systems', 'control' => 'A vulnerability scanner with an up-to-date vulnerability database is used for vulnerability scanning activities.'],
    '6.03' => ['class' => 'Patch operating systems', 'control' => 'A vulnerability scanner is used at least daily to identify missing patches or updates for vulnerabilities in operating systems of internet-facing servers and internet-facing network devices.'],
    '6.04' => ['class' => 'Patch operating systems', 'control' => 'A vulnerability scanner is used at least fortnightly to identify missing patches or updates for vulnerabilities in operating systems of workstations, non-internet-facing servers and non-internet-facing network devices.'],
    '6.07' => ['class' => 'Patch operating systems', 'control' => 'Patches, updates or other vendor mitigations for vulnerabilities in operating systems of internet-facing servers and internet-facing network devices are applied within 48 hours of release when vulnerabilities are assessed as critical by vendors or when working exploits exist.'],
    '6.08' => ['class' => 'Patch operating systems', 'control' => 'Patches, updates or other vendor mitigations for vulnerabilities in operating systems of internet-facing servers and internet-facing network devices are applied within two weeks of release when vulnerabilities are assessed as non-critical by vendors and no working exploits exist.'],
    '6.09' => ['class' => 'Patch operating systems', 'control' => 'Patches, updates or other vendor mitigations for vulnerabilities in operating systems of workstations, non-internet-facing servers and non-internet-facing network devices are applied within one month of release.'],
    '6.17' => ['class' => 'Patch operating systems', 'control' => 'Operating systems that are no longer supported by vendors are replaced.'],
    
    // Multi-factor Authentication
    '7.01' => ['class' => 'Multi-factor authentication', 'control' => 'Multi-factor authentication is used to authenticate users to their organisations online services that process, store or communicate their organisations sensitive data.'],
    '7.02' => ['class' => 'Multi-factor authentication', 'control' => 'Multi-factor authentication is used to authenticate users to third-party online services that process, store or communicate their organisations sensitive data.'],
    '7.03' => ['class' => 'Multi-factor authentication', 'control' => 'Multi-factor authentication (where available) is used to authenticate users to third-party online services that process, store or communicate their organisations non-sensitive data.'],
    '7.04' => ['class' => 'Multi-factor authentication', 'control' => 'Multi-factor authentication is used to authenticate users to their organisations online customer services that process, store or communicate their organisations sensitive customer data.'],
    '7.05' => ['class' => 'Multi-factor authentication', 'control' => 'Multi-factor authentication is used to authenticate users to third-party online customer services that process, store or communicate their organisations sensitive customer data.'],
    '7.06' => ['class' => 'Multi-factor authentication', 'control' => 'Multi-factor authentication is used to authenticate customers to online customer services that process, store or communicate sensitive customer data.'],
    '7.10' => ['class' => 'Multi-factor authentication', 'control' => 'Multi-factor authentication uses either: something users have and something users know, or something users have that is unlocked by something users know or are.'],
    
    // Regular Backups
    '8.01' => ['class' => 'Regular backups', 'control' => 'Backups of data, applications and settings are performed and retained in accordance with business criticality and business continuity requirements.'],
    '8.02' => ['class' => 'Regular backups', 'control' => 'Backups of data, applications and settings are synchronised to enable restoration to a common point in time.'],
    '8.03' => ['class' => 'Regular backups', 'control' => 'Backups of data, applications and settings are retained in a secure and resilient manner.'],
    '8.04' => ['class' => 'Regular backups', 'control' => 'Restoration of data, applications and settings from backups to a common point in time is tested as part of disaster recovery exercises.'],
    '8.05' => ['class' => 'Regular backups', 'control' => 'Unprivileged user accounts cannot access backups belonging to other user accounts.'],
    '8.09' => ['class' => 'Regular backups', 'control' => 'Unprivileged user accounts are prevented from modifying and deleting backups.']
];

// Modified mapping to include weights for each control
$question_control_mapping = [
    'q1' => [
        '1.01' => 0.6, // Application Control on workstations is heavily weighted
        '1.04' => 0.4,
        '1.06' => 0.5
    ],
    'q2' => [
        '2.01' => 0.4,
        '2.02' => 0.4,
        '2.03' => 0.5,
        '2.04' => 0.5,
        '2.06' => 0.6, // Critical patches are weighted more heavily
        '2.07' => 0.4,
        '2.08' => 0.5,
        '2.12' => 0.3,
        '2.13' => 0.3
    ],
    'q3' => [
        '3.01' => 0.5,
        '3.08' => 0.6, // Blocking internet macros is weighted more heavily
        '3.09' => 0.4,
        '3.11' => 0.4
    ],
    'q4' => [
        '4.01' => 0.3,
        '4.02' => 0.5,
        '4.03' => 0.5,
        '4.05' => 0.4
    ],
    'q5' => [
        '5.01' => 0.5,
        '5.04' => 0.6,
        '5.06' => 0.5,
        '5.07' => 0.4,
        '5.09' => 0.4,
        '5.11' => 0.4,
        '5.12' => 0.4
    ],
    'q6' => [
        '6.01' => 0.4,
        '6.02' => 0.4,
        '6.03' => 0.5,
        '6.04' => 0.5,
        '6.07' => 0.6, // Critical OS patches weighted more heavily
        '6.08' => 0.4,
        '6.09' => 0.5,
        '6.17' => 0.4
    ],
    'q7' => [
        '7.01' => 0.6, // Core MFA requirements weighted more heavily
        '7.02' => 0.5,
        '7.03' => 0.3,
        '7.04' => 0.5,
        '7.05' => 0.4,
        '7.06' => 0.4,
        '7.10' => 0.5
    ],
    'q8' => [
        '8.01' => 0.6, // Core backup requirements weighted more heavily
        '8.02' => 0.5,
        '8.03' => 0.5,
        '8.04' => 0.4,
        '8.05' => 0.3,
        '8.09' => 0.3
    ],
    'q9' => [], // Internet Protection (not directly mapped to E8 controls)
    'q10' => [] // Security Monitoring (not directly mapped to E8 controls)
];

// Track which questions contribute to each control
$control_question_mapping = [];
foreach ($question_control_mapping as $questionId => $controls) {
    foreach ($controls as $controlId => $weight) {
        if (!isset($control_question_mapping[$controlId])) {
            $control_question_mapping[$controlId] = [];
        }
        $control_question_mapping[$controlId][$questionId] = $weight;
    }
}

/**
 * Evaluates the answers and generates control compliance data using weighted scoring
 * @param array $answers Array of question answers (yes/no)
 * @return array Array of control compliance status (1 for pass, 0 for fail)
 */
function evaluateControls($answers) {
    global $e8_controls, $control_question_mapping;
    $results = [];
    $scores = [];
    $threshold = 0.7; // 70% threshold for passing
    
    // Initialize all controls as 0
    foreach ($e8_controls as $controlId => $control) {
        $scores[$controlId] = ['total_weight' => 0, 'weighted_score' => 0];
        $results[$controlId] = 0;
    }
    
    // Calculate weighted scores for each control
    foreach ($control_question_mapping as $controlId => $questions) {
        foreach ($questions as $questionId => $weight) {
            $scores[$controlId]['total_weight'] += $weight;
            if (isset($answers[$questionId]) && $answers[$questionId] === 'yes') {
                $scores[$controlId]['weighted_score'] += $weight;
            }
        }
        
        // Calculate final score and determine if control passes
        if ($scores[$controlId]['total_weight'] > 0) {
            $final_score = $scores[$controlId]['weighted_score'] / $scores[$controlId]['total_weight'];
            $results[$controlId] = ($final_score >= $threshold) ? 1 : 0;
        }
    }
    
    return $results;
}

/**
 * Generates a CSV string from the evaluation results
 * @param array $results Array of control compliance status
 * @return string CSV formatted string
 */
function generateCSV($results) {
    $csv = "controlid,audit\n";
    foreach ($results as $controlId => $status) {
        $csv .= "$controlId,$status\n";
    }
    return $csv;
}

/**
 * Get detailed scoring information for a control
 * @param string $controlId The control ID to get details for
 * @param array $answers The user's answers
 * @return array Detailed scoring information
 */
function getControlScoreDetails($controlId, $answers) {
    global $control_question_mapping;
    
    $details = [
        'contributing_questions' => [],
        'total_weight' => 0,
        'weighted_score' => 0
    ];
    
    if (isset($control_question_mapping[$controlId])) {
        foreach ($control_question_mapping[$controlId] as $questionId => $weight) {
            $details['contributing_questions'][$questionId] = [
                'weight' => $weight,
                'answered' => isset($answers[$questionId]) ? $answers[$questionId] : 'no',
                'contribution' => (isset($answers[$questionId]) && $answers[$questionId] === 'yes') ? $weight : 0
            ];
            $details['total_weight'] += $weight;
            if (isset($answers[$questionId]) && $answers[$questionId] === 'yes') {
                $details['weighted_score'] += $weight;
            }
        }
    }
    
    $details['final_score'] = $details['total_weight'] > 0 ? 
        ($details['weighted_score'] / $details['total_weight']) : 0;
    
    return $details;
}
?> 