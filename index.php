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
            <div class="col-12">
                <form action="process.php" method="post" id="assessmentForm" target="_blank" novalidate>
                    <!-- Prospect Form -->
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-8">
                            <div class="prospect-form">
                                <h6 class="text-muted mb-3">
                                    <i class="bi bi-person-vcard me-2"></i>Your Information (Optional)
                                </h6>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="prospect_name" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="business_name" placeholder="Business Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email_address" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="notes" placeholder="Notes">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Progress bar -->
                    <div class="progress-container mb-5">
                        <h6 class="text-muted mb-3">
                            <i class="bi bi-check2-circle me-2"></i>Assessment Progress
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" 
                                 role="progressbar" 
                                 style="width: 0%" 
                                 id="progressBar"
                                 aria-valuemin="0"
                                 aria-valuemax="100"
                                 aria-valuenow="0">
                            </div>
                        </div>
                        <div class="progress-status">
                            <span>Questions Answered: <span id="questionsAnswered">0</span>/10</span>
                            <span id="progressPercentage">0%</span>
                        </div>
                    </div>

                    <div class="question-cards-grid">
                        <!-- Application Environment Section -->
                        <div class="card question-card software-control">
                            <div class="card-title">
                                Software Control
                                <div class="category-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">1. Can staff <strong>ONLY</strong> install and run approved software on work computers?</label>
                                    <div class="form-text mb-2">This means having controls in place that prevent users from downloading and running unauthorized programs on company computers and servers.</div>
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
                        <div class="card question-card software-updates">
                            <div class="card-title">
                                Software Updates
                                <div class="category-icon">
                                    <i class="bi bi-arrow-repeat"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">2. Do you have a system that automatically updates your software within a month of updates being released?</label>
                                    <div class="form-text mb-2">This includes having a process to regularly update all company computers, systems, and applications when security fixes become available.</div>
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
                        <div class="card question-card document-safety">
                            <div class="card-title">
                                Document Safety
                                <div class="category-icon">
                                    <i class="bi bi-file-earmark-code"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">3. Are Microsoft Office documents from outside your organization blocked from running automated tasks (Macros)?</label>
                                    <div class="form-text mb-2">This means preventing potentially harmful automated actions (macros) in Microsoft Office files that come from external sources or the internet.</div>
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
                        <div class="card question-card internet-safety">
                            <div class="card-title">
                                Internet Safety
                                <div class="category-icon">
                                    <i class="bi bi-globe"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">4. Do you have safety measures in place to block harmful content when staff browse the internet or use email?</label>
                                    <div class="form-text mb-2">This includes having systems that filter out dangerous websites, block malicious email attachments, and prevent harmful content from reaching users.</div>
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
                        <div class="card question-card special-access">
                            <div class="card-title">
                                Special Access Rights
                                <div class="category-icon">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">5. Do you carefully control who gets administrator access to company systems?</label>
                                    <div class="form-text mb-2">This means having a process to approve and review who gets special access privileges, and ensuring these powerful accounts are only used when necessary.</div>
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
                        <div class="card question-card login-security">
                            <div class="card-title">
                                Login Security (MFA)
                                <div class="category-icon">
                                    <i class="bi bi-key"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">6. Do you require two-step verification when staff access company systems from outside the office?</label>
                                    <div class="form-text mb-2">This means using something extra beyond just a password (like a code sent to a phone) when people need to access work systems remotely.</div>
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
                        <div class="card question-card system-security">
                            <div class="card-title">
                                System Security
                                <div class="category-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">7. Are unnecessary features and functions turned off on your computers and systems?</label>
                                    <div class="form-text mb-2">This means disabling or removing any unnecessary programs, features, or services that aren't required for daily business operations.</div>
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
                        <div class="card question-card data-backups">
                            <div class="card-title">
                                Data Backups
                                <div class="category-icon">
                                    <i class="bi bi-cloud-arrow-up"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">8. Do you regularly back up important company data and check that you can restore it?</label>
                                    <div class="form-text mb-2">This means having regular backups of important files and systems, and testing that you can actually recover them when needed.</div>
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
                        <div class="card question-card security-alerts">
                            <div class="card-title">
                                Security Alerts
                                <div class="category-icon">
                                    <i class="bi bi-graph-up"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">9. Do you have systems in place to detect and warn you about unusual or suspicious activity?</label>
                                    <div class="form-text mb-2">This means having tools that monitor your systems and alert you when something unusual or potentially dangerous happens.</div>
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
                        <div class="card question-card security-guidelines">
                            <div class="card-title">
                                Security Guidelines for Staff
                                <div class="category-icon">
                                    <i class="bi bi-clipboard-check"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">10. Do you have written security rules that are regularly updated and followed?</label>
                                    <div class="form-text mb-2">This means having clear security policies that everyone knows about, and making sure these rules are kept up to date and properly followed.</div>
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
                    </div>

                    <div class="text-center mt-4">
                        <div id="form-error" class="alert alert-danger d-none mb-3">
                            Please answer all questions before submitting the assessment.
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg px-5" id="submitButton" disabled>Generate E8Rapid Profile</button>
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
            const progressPercentage = document.getElementById('progressPercentage');
            const questionsAnswered = document.getElementById('questionsAnswered');
            const radios = form.querySelectorAll('input[type="radio"]');
            const formError = document.getElementById('form-error');
            const totalQuestions = 10;

            function updateProgress() {
                // Count unique questions that have been answered
                const answeredQuestions = new Set();
                Array.from(radios).forEach(radio => {
                    if (radio.checked) {
                        // Extract question number from the name (e.g., 'q1', 'q2', etc.)
                        const questionNumber = radio.name;
                        answeredQuestions.add(questionNumber);
                    }
                });
                const answered = answeredQuestions.size;
                const progress = Math.round((answered / totalQuestions) * 100);
                
                // Update progress bar
                progressBar.style.width = progress + '%';
                progressBar.setAttribute('aria-valuenow', progress);
                
                // Update status text
                progressPercentage.textContent = progress + '%';
                questionsAnswered.textContent = answered;
                
                // Update progress bar color and button state based on completion
                const submitButton = document.getElementById('submitButton');
                if (progress === 100) {
                    progressBar.classList.remove('bg-primary');
                    progressBar.classList.add('bg-success');
                    submitButton.disabled = false;
                } else {
                    progressBar.classList.remove('bg-success');
                    progressBar.classList.add('bg-primary');
                    submitButton.disabled = true;
                }
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
                    // Clear prospect form fields
                    document.querySelector('input[name="prospect_name"]').value = '';
                    document.querySelector('input[name="business_name"]').value = '';
                    document.querySelector('input[name="email_address"]').value = '';
                    document.querySelector('input[name="notes"]').value = '';
                    // Reset progress indicators
                    progressBar.style.width = '0%';
                    progressBar.setAttribute('aria-valuenow', 0);
                    progressPercentage.textContent = '0%';
                    questionsAnswered.textContent = '0';
                    progressBar.classList.remove('bg-success');
                    progressBar.classList.add('bg-primary');
                    document.getElementById('submitButton').disabled = true;
                }, 1000);
            });
        });
    </script>
</body>
</html> 