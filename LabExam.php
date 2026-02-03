<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHEWH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --ghewh-bg: #0f1116; 
            --ghewh-accent: #f15a5a; 
            --ghewh-card: #1c1f26; 
            --text-gray: #b1b5bb;
        }

        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--ghewh-bg); 
            color: #ffffff;
            margin: 0;
        }

        
        .hero-bg {
            background: radial-gradient(circle at bottom right, #3d1414 0%, var(--ghewh-bg) 70%);
            min-height: 100vh;
        }

        
        .navbar { 
            background-color: rgba(15, 17, 22, 0.95); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px 40px;
        }
        .navbar-brand { font-weight: 800; font-size: 1.5rem; display: flex; align-items: center; }
        .nav-link { 
            color: var(--text-gray) !important; 
            font-size: 0.9rem; 
            padding: 8px 15px !important;
            transition: 0.3s;
        }
        .nav-link:hover, .nav-link.active { color: white !important; }
        .nav-link.active { background: rgba(241, 90, 90, 0.2); border-radius: 20px; color: var(--ghewh-accent) !important; }
        
        .btn-logout { 
            border: 1px solid rgba(255,255,255,0.2); 
            color: white; 
            border-radius: 8px;
            font-size: 0.85rem;
            padding: 5px 15px;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            background: var(--ghewh-card);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .form-control {
            background: #252a33;
            border: 1px solid #363d4a;
            color: white;
        }
        .form-control:focus { background: #2c323d; border-color: var(--ghewh-accent); color: white; box-shadow: none; }
        .btn-primary-custom { background-color: var(--ghewh-accent); border: none; font-weight: 600; padding: 12px; }
        .btn-primary-custom:hover { background-color: #d44d4d; }

        
        .sdg-tag {
            background: rgba(241, 90, 90, 0.15);
            color: var(--ghewh-accent);
            font-size: 0.75rem;
            padding: 4px 12px;
            border-radius: 20px;
            font-weight: 600;
        }

        .hidden { display: none; }
    </style>
</head>
<body>

    <div id="login-screen" class="hero-bg login-container">
        <div class="login-card shadow-lg">
            <h2 class="fw-bold mb-1">GHEWH <span style="color: var(--ghewh-accent);">●</span></h2>
            <p class="text-secondary small mb-4">Global Health Early Warning Hub Admin</p>
            <form onsubmit="event.preventDefault(); login();">
                <div class="mb-3 text-start">
                    <label class="small text-secondary mb-1">USERNAME</label>
                    <input type="text" class="form-control" placeholder="Admin username" required>
                </div>
                <div class="mb-4 text-start">
                    <label class="small text-secondary mb-1">PASSWORD</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-primary-custom w-100 rounded-pill">Enter Hub</button>
            </form>
        </div>
    </div>

    <nav id="top-nav" class="navbar navbar-expand-lg sticky-top hidden">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">GHEWH</a>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#" onclick="showPage('home')">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showPage('dashboard')">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showPage('risk')">Risk Monitor</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showPage('resources')">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showPage('tips')">Prevention Tips</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showPage('symptoms')">Symptoms Checker</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showPage('about')">About</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <span class="small text-secondary me-3 d-none d-xl-block">JOHN CHRISTOPHER MAYORES</span>
                <button class="btn btn-logout" onclick="location.reload()">Logout</button>
            </div>
        </div>
    </nav>

    <div id="main-content" class="container-fluid hidden hero-bg p-5">
        
        <div id="home-page" class="content-page">
            <div class="row align-items-center" style="min-height: 60vh;">
                <div class="col-lg-6">
                    <span class="sdg-tag">● SDG 3, Target 3.d</span>
                    <h1 class="display-3 fw-bold mt-3 mb-4">Global Health<br><span style="color: var(--ghewh-accent);">Early Warning Hub</span></h1>
                    <p class="text-secondary fs-5 mb-5" style="max-width: 500px;">
                        Strengthening global capacity for early warning, risk reduction, and management of national and global health risks.
                    </p>
                    <button class="btn btn-primary-custom rounded-pill px-4 py-2 me-3">View Risk Monitor →</button>
                    <button class="btn btn-outline-light rounded-pill px-4 py-2">Explore Resources</button>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="card p-4 text-center bg-transparent border-0">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="p-3 rounded-4" style="background: rgba(255,255,255,0.05);">
                                    <h3 class="fw-bold mb-0">194</h3>
                                    <small class="text-secondary">Countries Monitored</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 rounded-4" style="background: rgba(255,255,255,0.05);">
                                    <h3 class="fw-bold mb-0">24/7</h3>
                                    <small class="text-secondary">Risk Monitoring</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dashboard-page" class="content-page hidden">
            <h2 class="mb-4">System Data Management</h2>
            <div class="card bg-dark border-secondary p-4">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Alert ID</th>
                            <th>Status</th>
                            <th>Metric</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#001-ALPHA</td>
                            <td><span class="badge bg-danger">Critical</span></td>
                            <td>Real-time System Active</td>
                            <td>
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="about-page" class="content-page hidden">
            <h2>Admin Settings</h2>
            <div class="card p-4 bg-dark border-secondary" style="max-width: 500px;">
                <div class="mb-3">
                    <label class="form-label small text-secondary">NAME</label>
                    <input type="text" class="form-control" value="JOI CHRISTOPHER MAYORES">
                </div>
                <button class="btn btn-primary-custom rounded-pill w-50">Update Profile</button>
            </div>
        </div>

    </div>

    <script>
        function login() {
            document.getElementById('login-screen').classList.add('hidden');
            document.getElementById('top-nav').classList.remove('hidden');
            document.getElementById('main-content').classList.remove('hidden');
        }

        function showPage(pageId) {
            document.querySelectorAll('.content-page').forEach(page => page.classList.add('hidden'));
            document.getElementById(pageId + '-page').classList.remove('hidden');
            
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if(link.innerText.toLowerCase().includes(pageId)) link.classList.add('active');
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>