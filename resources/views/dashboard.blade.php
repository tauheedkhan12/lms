<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Learning Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .action-btn {
            transition: all 0.2s ease;
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(102, 126, 234, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center justify-between">
                <h2 class="text-3xl font-bold text-gray-900">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-600 hover:text-indigo-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </button>
                    <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-white font-semibold">
                        JD
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Card -->
        <div class="gradient-bg rounded-3xl p-8 mb-8 shadow-xl">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-3xl font-bold text-white mb-2">
                        Welcome back, John! 👋
                    </h3>
                    <p class="text-indigo-100 text-lg">
                        You're making great progress. Keep learning!
                    </p>
                </div>
                <div class="hidden md:block">
                    <svg class="w-24 h-24 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Courses Enrolled -->
            <div class="bg-white rounded-2xl p-6 stat-card shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded-full">+12%</span>
                </div>
                <h4 class="text-gray-500 text-sm font-medium mb-1">Courses Enrolled</h4>
                <p class="text-3xl font-bold text-gray-900">8</p>
            </div>

            <!-- Completed Courses -->
            <div class="bg-white rounded-2xl p-6 stat-card shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded-full">+3</span>
                </div>
                <h4 class="text-gray-500 text-sm font-medium mb-1">Completed</h4>
                <p class="text-3xl font-bold text-gray-900">5</p>
            </div>

            <!-- Learning Hours -->
            <div class="bg-white rounded-2xl p-6 stat-card shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded-full">+5h</span>
                </div>
                <h4 class="text-gray-500 text-sm font-medium mb-1">Learning Hours</h4>
                <p class="text-3xl font-bold text-gray-900">42</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-2xl p-8 shadow-md mb-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button class="action-btn flex flex-col items-center justify-center p-6 rounded-xl border-2 border-gray-200 hover:border-indigo-500 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-900">New Course</span>
                </button>

                <button class="action-btn flex flex-col items-center justify-center p-6 rounded-xl border-2 border-gray-200 hover:border-indigo-500 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-900">Assignments</span>
                </button>

                <button class="action-btn flex flex-col items-center justify-center p-6 rounded-xl border-2 border-gray-200 hover:border-indigo-500 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-900">Messages</span>
                </button>

                <button class="action-btn flex flex-col items-center justify-center p-6 rounded-xl border-2 border-gray-200 hover:border-indigo-500 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-teal-100 flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-900">Progress</span>
                </button>
            </div>
        </div>

        <!-- Recent Courses -->
        <div class="bg-white rounded-2xl p-8 shadow-md">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-900">Continue Learning</h3>
                <a href="#" class="text-indigo-600 hover:text-indigo-700 font-semibold text-sm">View All</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Course 1 -->
                <div class="border-2 border-gray-100 rounded-xl p-4 hover:border-indigo-500 transition-all cursor-pointer">
                    <div class="w-full h-40 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Web Development</h4>
                    <p class="text-sm text-gray-600 mb-3">Master modern web technologies</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">65% Complete</span>
                        <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-indigo-600 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="border-2 border-gray-100 rounded-xl p-4 hover:border-indigo-500 transition-all cursor-pointer">
                    <div class="w-full h-40 bg-gradient-to-br from-purple-400 to-purple-600 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">UI/UX Design</h4>
                    <p class="text-sm text-gray-600 mb-3">Create stunning user experiences</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">42% Complete</span>
                        <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-indigo-600 rounded-full" style="width: 42%"></div>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="border-2 border-gray-100 rounded-xl p-4 hover:border-indigo-500 transition-all cursor-pointer">
                    <div class="w-full h-40 bg-gradient-to-br from-green-400 to-green-600 rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Data Analytics</h4>
                    <p class="text-sm text-gray-600 mb-3">Analyze data like a pro</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">28% Complete</span>
                        <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-indigo-600 rounded-full" style="width: 28%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>