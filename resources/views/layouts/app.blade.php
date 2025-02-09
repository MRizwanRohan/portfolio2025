<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-section {
            opacity: 0;
            animation: slideIn 1s ease-out forwards;
        }

        /* Adding delay for each section */
        #home.animate-section { animation-delay: 0s; }
        #about.animate-section { animation-delay: 1s; }
        #projects.animate-section { animation-delay: 2s; }
        #contact.animate-section { animation-delay: 3s; }

        /* Adding delays for each letter of your name and portfolio */
        .animate-letter {
            opacity: 0;
            animation: slideIn 0.5s ease-out forwards;
        }

        .illustration span:nth-child(1) { animation-delay: 0.1s; }
        .illustration span:nth-child(2) { animation-delay: 0.2s; }
        .illustration span:nth-child(3) { animation-delay: 0.3s; }
        .illustration span:nth-child(4) { animation-delay: 0.4s; }
        .illustration span:nth-child(5) { animation-delay: 0.5s; }
        .illustration span:nth-child(6) { animation-delay: 0.6s; }
        .illustration span:nth-child(7) { animation-delay: 0.7s; }
        .illustration span:nth-child(8) { animation-delay: 0.8s; }
        .illustration span:nth-child(9) { animation-delay: 0.9s; }
        .illustration span:nth-child(10) { animation-delay: 1s; }
        .illustration span:nth-child(11) { animation-delay: 1.1s; }
        .illustration span:nth-child(12) { animation-delay: 1.2s; }

        .portfolio span:nth-child(1) { animation-delay: 1.3s; }
        .portfolio span:nth-child(2) { animation-delay: 1.4s; }
        .portfolio span:nth-child(3) { animation-delay: 1.5s; }
        .portfolio span:nth-child(4) { animation-delay: 1.6s; }
        .portfolio span:nth-child(5) { animation-delay: 1.7s; }
        .portfolio span:nth-child(6) { animation-delay: 1.8s; }
        .portfolio span:nth-child(7) { animation-delay: 1.9s; }
        .portfolio span:nth-child(8) { animation-delay: 2s; }
        .portfolio span:nth-child(9) { animation-delay: 2.1s; }

        .name span:nth-child(1) { animation-delay: 2.2s; }
        .name span:nth-child(2) { animation-delay: 2.3s; }
        .name span:nth-child(3) { animation-delay: 2.4s; }
        .name span:nth-child(4) { animation-delay: 2.5s; }

        .year span:nth-child(1) { animation-delay: 2.6s; }
        .year span:nth-child(2) { animation-delay: 2.7s; }
        .year span:nth-child(3) { animation-delay: 2.8s; }
        .year span:nth-child(4) { animation-delay: 2.9s; }
    </style>
</head>
<body class="m-0 p-0 h-screen w-screen overflow-x-hidden bg-gray-900 text-white">
    @yield('content')
</body>
</html>
