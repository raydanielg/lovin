<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') - Emas</title>
    <link rel="icon" type="image/png" href="{{ asset('Coat_of_arms_of_Tanzania.svg.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * { font-family: 'Inter', sans-serif; }
        body { background: #f1f5f9; }
        .sidebar {
            background: linear-gradient(180deg, #14532d 0%, #166534 100%);
            min-height: 100vh;
        }
        .sidebar-link {
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            margin: 2px 0;
            border-radius: 8px;
        }
        .sidebar-link:hover {
            background: rgba(255, 255, 255, 0.08);
            color: white;
            transform: translateX(4px);
        }
        .sidebar-link.active {
            background: linear-gradient(90deg, rgba(250, 204, 21, 0.2) 0%, rgba(250, 204, 21, 0.05) 100%);
            color: #facc15;
            border-left-color: #facc15;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(250, 204, 21, 0.15);
        }
        .sidebar-link.active i {
            color: #facc15;
        }
        .user-dropdown {
            position: relative;
        }
        .user-dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 8px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.2s ease;
            z-index: 100;
        }
        .user-dropdown:hover .user-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #374151;
            transition: all 0.2s;
            border-radius: 8px;
            margin: 4px;
        }
        .dropdown-item:hover {
            background: #f3f4f6;
            color: #16a34a;
        }
        .dropdown-item:first-child {
            border-radius: 12px 12px 8px 8px;
        }
        .dropdown-item:last-child {
            border-radius: 8px 8px 12px 12px;
        }
        .avatar-circle {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 16px;
            border: 3px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.3);
            cursor: pointer;
            transition: all 0.2s;
        }
        .avatar-circle:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(22, 163, 74, 0.4);
        }
        .sidebar-dropdown {
            position: relative;
        }
        .sidebar-dropdown-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background: rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            margin: 4px 0;
        }
        .sidebar-dropdown:hover .sidebar-dropdown-menu,
        .sidebar-dropdown.active .sidebar-dropdown-menu {
            max-height: 500px;
        }
        .sidebar-dropdown-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 16px 10px 48px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            transition: all 0.2s;
            border-radius: 6px;
            margin: 2px 8px;
        }
        .sidebar-dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        .sidebar-dropdown-item.active {
            color: #facc15;
            background: rgba(250, 204, 21, 0.1);
        }
        .sidebar-dropdown-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }
        .sidebar-dropdown-toggle i.fa-chevron-down {
            transition: transform 0.3s;
            font-size: 0.75rem;
        }
        .sidebar-dropdown:hover .sidebar-dropdown-toggle i.fa-chevron-down,
        .sidebar-dropdown.active .sidebar-dropdown-toggle i.fa-chevron-down {
            transform: rotate(180deg);
        }
        .sidebar-badge {
            background: #facc15;
            color: #166534;
            font-size: 0.65rem;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 10px;
            margin-left: auto;
        }
        .header {
            background: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: white;
            transition: all 0.2s;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #15803d 0%, #166534 100%);
            transform: translateY(-1px);
        }
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-left: 4px solid #16a34a;
        }
        .stat-card.blue { border-left-color: #3b82f6; }
        .stat-card.yellow { border-left-color: #eab308; }
        .stat-card.red { border-left-color: #ef4444; }
    </style>
</head>
<body class="flex">
    <!-- Sidebar -->
    <aside class="sidebar w-64 fixed h-full overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center gap-3 mb-8">
                <img src="{{ asset('Coat_of_arms_of_Tanzania.svg.png') }}" alt="Logo" class="w-12 h-12">
                <div>
                    <h1 class="text-white font-bold text-lg">Emas</h1>
                    <p class="text-green-200 text-xs">Manager Portal</p>
                </div>
            </div>

            <nav class="space-y-1">
                <!-- Dashboard -->
                <a href="{{ route('manager.dashboard') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded {{ request()->routeIs('manager.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt w-5"></i>
                    <span>Dashboard</span>
                </a>

                <!-- Schools Dropdown -->
                <div class="sidebar-dropdown {{ request()->routeIs('manager.schools*') ? 'active' : '' }}">
                    <div class="sidebar-link sidebar-dropdown-toggle px-4 py-3 rounded">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-school w-5"></i>
                            <span>Schools</span>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="sidebar-dropdown-menu">
                        <a href="{{ route('manager.schools.index') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.schools.index') ? 'active' : '' }}">
                            <i class="fas fa-list text-xs"></i>
                            <span>All Schools</span>
                        </a>
                        <a href="{{ route('manager.schools.create') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.schools.create') ? 'active' : '' }}">
                            <i class="fas fa-plus-circle text-xs"></i>
                            <span>Add School</span>
                        </a>
                    </div>
                </div>

                <!-- Students Dropdown -->
                <div class="sidebar-dropdown {{ request()->routeIs('manager.students*') ? 'active' : '' }}">
                    <div class="sidebar-link sidebar-dropdown-toggle px-4 py-3 rounded">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-user-graduate w-5"></i>
                            <span>Students</span>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="sidebar-dropdown-menu">
                        <a href="{{ route('manager.students') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.students') && !request()->routeIs('manager.students.create') ? 'active' : '' }}">
                            <i class="fas fa-users text-xs"></i>
                            <span>All Students</span>
                        </a>
                        <a href="{{ route('manager.students.create') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.students.create') ? 'active' : '' }}">
                            <i class="fas fa-user-plus text-xs"></i>
                            <span>Add Student</span>
                        </a>
                    </div>
                </div>

                <!-- Subjects Dropdown -->
                <div class="sidebar-dropdown {{ request()->routeIs('manager.subjects*') ? 'active' : '' }}">
                    <div class="sidebar-link sidebar-dropdown-toggle px-4 py-3 rounded">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-book w-5"></i>
                            <span>Subjects</span>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="sidebar-dropdown-menu">
                        <a href="{{ route('manager.subjects.index') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.subjects.index') ? 'active' : '' }}">
                            <i class="fas fa-list text-xs"></i>
                            <span>All Subjects</span>
                        </a>
                        <a href="{{ route('manager.subjects.create') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.subjects.create') ? 'active' : '' }}">
                            <i class="fas fa-plus-circle text-xs"></i>
                            <span>Add Subject</span>
                        </a>
                    </div>
                </div>

                <!-- Examinations Dropdown -->
                <div class="sidebar-dropdown {{ request()->routeIs('manager.exams*') ? 'active' : '' }}">
                    <div class="sidebar-link sidebar-dropdown-toggle px-4 py-3 rounded">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-file-alt w-5"></i>
                            <span>Examinations</span>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="sidebar-dropdown-menu">
                        <a href="{{ route('manager.exams.index') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.exams.index') ? 'active' : '' }}">
                            <i class="fas fa-list text-xs"></i>
                            <span>All Exams</span>
                        </a>
                        <a href="{{ route('manager.exams.manage') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.exams.manage') ? 'active' : '' }}">
                            <i class="fas fa-cogs text-xs"></i>
                            <span>Manage Exam</span>
                        </a>
                    </div>
                </div>

                <!-- Enter Marks Dropdown -->
                <div class="sidebar-dropdown {{ request()->routeIs('manager.marks*') ? 'active' : '' }}">
                    <div class="sidebar-link sidebar-dropdown-toggle px-4 py-3 rounded">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-pen-square w-5"></i>
                            <span>Enter Marks</span>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="sidebar-dropdown-menu">
                        <a href="{{ route('manager.marks') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.marks') && !request()->routeIs('manager.marks.live') ? 'active' : '' }}">
                            <i class="fas fa-clipboard-list text-xs"></i>
                            <span>All Marks</span>
                        </a>
                        <a href="{{ route('manager.marks.live') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.marks.live') ? 'active' : '' }}">
                            <i class="fas fa-broadcast-tower text-xs"></i>
                            <span>Live Data</span>
                            <span class="sidebar-badge">LIVE</span>
                        </a>
                    </div>
                </div>

                <!-- Reports Dropdown -->
                <div class="sidebar-dropdown {{ request()->routeIs('manager.reports*') ? 'active' : '' }}">
                    <div class="sidebar-link sidebar-dropdown-toggle px-4 py-3 rounded">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-chart-pie w-5"></i>
                            <span>Reports</span>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="sidebar-dropdown-menu">
                        <a href="{{ route('manager.reports.school') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.reports.school') ? 'active' : '' }}">
                            <i class="fas fa-school text-xs"></i>
                            <span>School Reports</span>
                        </a>
                        <a href="{{ route('manager.reports.student') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.reports.student') ? 'active' : '' }}">
                            <i class="fas fa-user text-xs"></i>
                            <span>Student Reports</span>
                        </a>
                        <a href="{{ route('manager.reports.class') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.reports.class') ? 'active' : '' }}">
                            <i class="fas fa-trophy text-xs"></i>
                            <span>Class Ranks</span>
                        </a>
                        <a href="{{ route('manager.reports.ward') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.reports.ward') ? 'active' : '' }}">
                            <i class="fas fa-map-marker-alt text-xs"></i>
                            <span>Ward Reports</span>
                        </a>
                        <a href="{{ route('manager.reports.district') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.reports.district') ? 'active' : '' }}">
                            <i class="fas fa-city text-xs"></i>
                            <span>District Reports</span>
                        </a>
                        <a href="{{ route('manager.reports.regional') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.reports.regional') ? 'active' : '' }}">
                            <i class="fas fa-globe text-xs"></i>
                            <span>Regional Reports</span>
                        </a>
                        <a href="{{ route('manager.reports.national') }}" class="sidebar-dropdown-item {{ request()->routeIs('manager.reports.national') ? 'active' : '' }}">
                            <i class="fas fa-flag text-xs"></i>
                            <span>National Reports</span>
                        </a>
                    </div>
                </div>

                <!-- Subscription -->
                <a href="{{ route('manager.subscription') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded {{ request()->routeIs('manager.subscription*') ? 'active' : '' }}">
                    <i class="fas fa-crown w-5"></i>
                    <span>Subscription</span>
                    <span class="sidebar-badge">PRO</span>
                </a>

                <!-- Feedback -->
                <a href="{{ route('manager.feedback') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded {{ request()->routeIs('manager.feedback*') ? 'active' : '' }}">
                    <i class="fas fa-comment-dots w-5"></i>
                    <span>Feedback</span>
                </a>

                <!-- Settings -->
                <a href="{{ route('manager.settings') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded {{ request()->routeIs('manager.settings*') ? 'active' : '' }}">
                    <i class="fas fa-cog w-5"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </div>

        <div class="absolute bottom-0 w-full p-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded">
                    <i class="fas fa-sign-out-alt w-5"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 ml-64">
        <!-- Header -->
        <header class="header sticky top-0 z-10 px-8 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">@yield('page_title', 'Dashboard')</h2>
                    <p class="text-sm text-gray-500">{{ now()->format('l, F j, Y') }}</p>
                </div>
                <div class="flex items-center gap-4">
                    <button class="text-gray-500 hover:text-gray-700 relative">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">3</span>
                    </button>
                    <div class="user-dropdown">
                    <div class="flex items-center gap-3 cursor-pointer">
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ auth()->user()->role?->name ?? 'Manager' }}</p>
                        </div>
                        <div class="avatar-circle">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                    </div>
                    
                    <!-- Dropdown Menu -->
                    <div class="user-dropdown-menu">
                        <div class="px-4 py-3 border-b border-gray-100">
                            <p class="font-semibold text-gray-800">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                        </div>
                        <a href="{{ route('manager.settings') }}" class="dropdown-item">
                            <i class="fas fa-user-cog text-green-600"></i>
                            <span>My Profile</span>
                        </a>
                        <a href="{{ route('manager.settings') }}" class="dropdown-item">
                            <i class="fas fa-cog text-green-600"></i>
                            <span>Settings</span>
                        </a>
                        <div class="border-t border-gray-100 mt-1"></div>
                        <form method="POST" action="{{ route('logout') }}" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item w-full text-left" style="border: none; background: none; cursor: pointer;">
                                <i class="fas fa-sign-out-alt text-red-500"></i>
                                <span class="text-red-500">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-300 rounded-lg flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-600"></i>
                    <span class="text-green-800">{{ session('success') }}</span>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
