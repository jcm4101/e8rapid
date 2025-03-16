<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E8Rapid - Essential Eight M1 Assessment Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="#" class="navbar-brand">
                <div class="brand-text">
                    <span class="brand-name">E8Rapid</span>
                    <span class="brand-subtitle">Essential Eight Assessment</span>
                </div>
            </a>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center header-section">
                <img src="img/fnlogo.png" alt="Company Logo" class="header-logo">
                <h1 class="display-4 mb-3">Essential Eight M1 Quick Assessment</h1>
                <p class="lead text-muted">Answer these 10 questions to evaluate your Essential Eight M1 compliance status.</p>
                <p class="text-muted small mt-2">
                    <i class="bi bi-info-circle me-1"></i>
                    This tool provides an approximate indication of your Essential Eight Maturity Level 1 status. 
                    For a comprehensive and accurate assessment, we recommend conducting a formal in-depth appraisal with qualified security professionals.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="process.php" method="post" id="assessmentForm" target="_blank" novalidate>
                    <!-- Progress bar -->
                    <div class="progress-container">
                        <h6 class="text-muted mb-3">Assessment Progress</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%" id="progressBar"></div>
                        </div>
                    </div>

                    <!-- Application Environment Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Application Environment</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">1. Are your computers and servers restricted to only run pre-approved software?</label>
                                <div class="form-text mb-2">This covers application control implementation across workstations and servers, software library restrictions, and prevention of unapproved code execution.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q1" id="q1_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q1_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q1" id="q1_no" value="no">
                                        <label class="btn btn-outline-danger" for="q1_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Update Management Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Update Management</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">2. Do you automatically apply security updates to systems and applications within 30 days of release?</label>
                                <div class="form-text mb-2">This covers OS and application patch management, automated deployment, and update compliance monitoring.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q2" id="q2_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q2_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q2" id="q2_no" value="no">
                                        <label class="btn btn-outline-danger" for="q2_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Microsoft Office Security Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-file-earmark-code"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Microsoft Office Security</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">3. Are Microsoft Office macros and automated content blocked from untrusted sources?</label>
                                <div class="form-text mb-2">This covers macro controls, internet zone restrictions, trusted location configuration, and document protection settings.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q3" id="q3_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q3_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q3" id="q3_no" value="no">
                                        <label class="btn btn-outline-danger" for="q3_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Web Protection Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Web Protection</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">4. Are your web browsers and email systems configured to block dangerous content?</label>
                                <div class="form-text mb-2">This covers browser security settings, email and web content filtering, advertisement blocking, and plugin restrictions.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q4" id="q4_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q4_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q4" id="q4_no" value="no">
                                        <label class="btn btn-outline-danger" for="q4_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Administrative Access Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Administrative Access</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">5. Is administrative access strictly limited and regularly reviewed?</label>
                                <div class="form-text mb-2">This covers admin privilege restriction, access review processes, privileged account management, and usage monitoring.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q5" id="q5_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q5_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q5" id="q5_no" value="no">
                                        <label class="btn btn-outline-danger" for="q5_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Authentication Controls Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-key"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Authentication Controls</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">6. Do you require two-factor authentication for remote access and privileged operations?</label>
                                <div class="form-text mb-2">This covers MFA for remote access and privileged accounts, authentication logging, and access control enforcement.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q6" id="q6_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q6_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q6" id="q6_no" value="no">
                                        <label class="btn btn-outline-danger" for="q6_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- System Hardening Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">System Hardening</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">7. Are your systems configured to disable or restrict unnecessary features?</label>
                                <div class="form-text mb-2">This covers operating system and application hardening, service restrictions, and default configuration management.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q7" id="q7_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q7_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q7" id="q7_no" value="no">
                                        <label class="btn btn-outline-danger" for="q7_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backup Management Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-cloud-arrow-up"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Backup Management</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">8. Do you maintain and regularly test backups of critical systems and data?</label>
                                <div class="form-text mb-2">This covers backup processes, restoration testing, backup security, and recovery procedures.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q8" id="q8_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q8_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q8" id="q8_no" value="no">
                                        <label class="btn btn-outline-danger" for="q8_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Monitoring Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Security Monitoring</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">9. Do you have systems that detect and alert on suspicious activities?</label>
                                <div class="form-text mb-2">This covers event logging, alert configuration, activity monitoring, and incident detection.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q9" id="q9_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q9_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q9" id="q9_no" value="no">
                                        <label class="btn btn-outline-danger" for="q9_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Governance Section -->
                    <div class="card mb-4 question-card">
                        <div class="card-body">
                            <div class="text-primary category-icon">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <h3 class="card-title h4 mb-4">Security Governance</h3>
                            <div class="mb-4">
                                <label class="form-label fw-bold">10. Do you have documented security policies that are regularly reviewed and enforced?</label>
                                <div class="form-text mb-2">This covers policy framework, compliance monitoring, security standards, and control implementation.</div>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="q10" id="q10_yes" value="yes" required>
                                        <label class="btn btn-outline-success" for="q10_yes">Yes</label>
                                        <input type="radio" class="btn-check" name="q10" id="q10_no" value="no">
                                        <label class="btn btn-outline-danger" for="q10_no">No</label>
                                    </div>
                                    <div class="invalid-feedback text-center mt-2">Please select an option</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <div id="form-error" class="alert alert-danger d-none mb-3">
                            Please answer all questions before submitting the assessment.
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg px-5">Generate Assessment Report</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('assessmentForm');
            const progressBar = document.getElementById('progressBar');
            const radios = form.querySelectorAll('input[type="radio"]');
            const formError = document.getElementById('form-error');
            const totalQuestions = 10;

            function updateProgress() {
                const answered = Array.from(radios).filter(radio => radio.checked).length / 2;
                const progress = (answered / totalQuestions) * 100;
                progressBar.style.width = progress + '%';
                progressBar.setAttribute('aria-valuenow', progress);
            }

            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    updateProgress();
                    // Remove error state when an option is selected
                    const questionCard = this.closest('.question-card');
                    questionCard.classList.remove('has-error');
                    const feedback = questionCard.querySelector('.invalid-feedback');
                    if (feedback) {
                        feedback.style.display = 'none';
                    }
                });
            });

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent default submission
                
                // Remove existing error states
                document.querySelectorAll('.question-card').forEach(card => {
                    card.classList.remove('has-error');
                    const feedback = card.querySelector('.invalid-feedback');
                    if (feedback) {
                        feedback.style.display = 'none';
                    }
                });
                formError.classList.add('d-none');

                // Check if all questions are answered
                const unansweredQuestions = [];
                for (let i = 1; i <= totalQuestions; i++) {
                    const questionName = `q${i}`;
                    const answered = form.querySelector(`input[name="${questionName}"]:checked`);
                    if (!answered) {
                        unansweredQuestions.push(i);
                        // Add error state to the question card
                        const questionCard = form.querySelector(`input[name="${questionName}"]`).closest('.question-card');
                        questionCard.classList.add('has-error');
                        const feedback = questionCard.querySelector('.invalid-feedback');
                        if (feedback) {
                            feedback.style.display = 'block';
                        }
                    }
                }

                if (unansweredQuestions.length > 0) {
                    // Show error message
                    formError.classList.remove('d-none');
                    // Scroll to the first unanswered question
                    const firstUnanswered = form.querySelector(`input[name="q${unansweredQuestions[0]}"]`).closest('.question-card');
                    firstUnanswered.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    return;
                }

                // If all questions are answered, submit the form
                form.submit();
                
                // Reset form after successful submission
                setTimeout(() => {
                    form.reset();
                    progressBar.style.width = '0%';
                    progressBar.setAttribute('aria-valuenow', 0);
                }, 1000);
            });
        });
    </script>
</body>
</html> 