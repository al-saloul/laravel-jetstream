<x-site-layout>
    <style>
        @media (min-width: 1200px) {

            #main,
            #footer {
                margin-left: 0;
            }
        }
        
    </style>
    <div></div>
    <div class="container mt-2">
        @auth
        <h2>
            Welcome,
            <span>{{ auth()->user()->name }}</span>
            . You have logged in via
            <span>{{ auth()->user()->roles->pluck('name')[0] ?? ''  }}</span>
            role
        </h2>
        <hr>
        @endauth

        <h1>Laravel Project Setup</h1>
        <p>This project is built using Laravel with Jetstream and includes the following features:</p>

        <ul>
            <li><strong>Laravel with Jetstream</strong>: Jetstream is a library for user management and provides robust authentication features. It includes features such as user registration, login, and session management.</li>
            <li><strong>Two-step authentication</strong>: Adds an extra layer of security to user accounts. The system requires users to enter an additional verification code sent to their device after entering their password.</li>
            <li><strong>User roles</strong>: The users are divided into three main roles:
                <ul>
                    <li><strong>Root</strong>: The user with full system privileges.</li>
                    <li><strong>Admin</strong>: The user with administrative privileges to manage the system.</li>
                    <li><strong>User</strong>: The regular user who uses the system according to the permissions granted.</li>
                </ul>
            </li>
            <li><strong>Bootstrap and Blade templates</strong>: The system uses Bootstrap for responsive and elegant UI design. Blade templates are used as the primary rendering engine for displaying pages in Laravel.</li>
            <li><strong>Laravel-mix instead of Vite</strong>: Laravel-mix is used as an asset management tool for JavaScript and CSS instead of Vite, improving the build and development process.</li>
        </ul>


        <h2>You Can Use One of These Users</h2>
        <p>The project includes the following users with specific roles and credentials:</p>
        <ul>
            <li><strong>Root user</strong>:
                <ul>
                    <li>Email: <code>root@example.com</code></li>
                    <li>Password: <code>password</code></li>
                    <li>Role: <code>root</code></li>
                </ul>
            </li>
            <li><strong>Admin user</strong>:
                <ul>
                    <li>Email: <code>admin@example.com</code></li>
                    <li>Password: <code>password</code></li>
                    <li>Role: <code>admin</code></li>
                </ul>
            </li>
            <li><strong>Regular user</strong>:
                <ul>
                    <li>Email: <code>user@example.com</code></li>
                    <li>Password: <code>password</code></li>
                    <li>Role: <code>user</code></li>
                </ul>
            </li>
        </ul>
    </div>
</x-site-layout>
