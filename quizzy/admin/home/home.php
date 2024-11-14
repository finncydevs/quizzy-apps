<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <div class="app-container">
        <!-- Header Section -->

        <div class="text-center my-3 mb-">
            <b>QUIZZY</b>
            <h1>Home</h1>
            <p><i class="bi bi-card-checklist"></i> My Flashcards</p>
        </div>
        <div class="row">
            <!-- Flashcards Section -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">FlashcardName</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Your progress</h6>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%"></div>
                        </div>
                        <p class="card-text">Information about the Flashcard.</p>
                        <a href="#" class="btn btn-primary">Go try it again</a>
                    </div>
                </div>
                <br>

                <!-- Favorites Section -->
                <div>
                    <div class="section-title">Favorites</div>
                    <div class="item">
                        <div class="item-icon"><i class="bi bi-check-circle text-primary"></i></div>
                        <div class="item-text">Code Review: Product Search & Filter</div>
                    </div>
                    <div class="item">
                        <div class="item-icon"><i class="bi bi-clock text-secondary"></i></div>
                        <div class="item-text">Research: Abandoned Cart Recovery</div>
                    </div>
                    <div class="item">
                        <div class="item-icon"><i class="bi bi-star text-warning"></i></div>
                        <div class="item-text">Product Review and Rating</div>
                    </div>
                </div>

                <!-- Teams Section -->
                <div>
                    <div class="section-title">Teams</div>
                    <div class="item">
                        <div class="item-icon"><i class="bi bi-building text-success"></i></div>
                        <div class="item-text">Slmobbin</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="add-flashcard">
                    <button class="btn btn-primary">Add Flashcard</button>
                </div>

            </div>
        </div>
        <!-- Bottom Navigation for Mobile -->
        <div class="bottom-nav d-flex justify-content-around">
            <div class="nav-icon"><i class="fa-solid fa-house"></i></div>
            <div class="nav-icon"><i class="fa-solid fa-bell"></i></div>
            <div class="nav-icon"><i class="fa-solid fa-pen-to-square"></i></div>
            <div class="nav-icon"><i class="fa-solid fa-magnifying-glass"></i></i></div>
            <div class="nav-icon"><i class="fa-solid fa-gear"></i></div>
        </div>

        <!-- Bootstrap 5 JS (Optional) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>