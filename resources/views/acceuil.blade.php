<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Fer-Transfert</title>
</head>
<body class="bg-[#F5F8FB] text-gray-800 antialiased font-sans min-h-screen flex flex-col">

<header>
    <div class="w-full max-w-4xl mx-auto flex justify-between items-center mt-4 px-4">
        <h1 class="font-bold text-blue-600 text-[20px] flex items-center">
            <a href="" class="flex items-center">
                Fer- <p class="text-[#000000]">Transfert</p>
                <img src="{{ asset('images/transfert.png') }}" alt="" class="w-5 ml-1">
            </a>
        </h1>

        <form action="" method="POST" class="flex items-center">
            @csrf
            <button type="submit" class="font-bold text-[17px] flex items-center cursor-pointer">
                Déconnexion
                <img src="{{ asset('images/fleche-droite (1).png') }}" alt="" class="w-5 ml-1">
            </button>
        </form>
    </div>
</header>

<section class="w-full max-w-4xl mx-auto mt-8 px-4 flex-1">
    <div class="shadow-xl p-8 md:p-16 rounded-lg bg-white flex flex-col items-center">
    <h1 class="font-bold mb-8 text-center" style="font-size: 25px;">{{ $account->balance }}FCFA</h1>
        <div class="w-full flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
            <div class="cursor-pointer p-3 shadow-md bg-blue-600 text-white rounded-md w-full md:w-1/4 text-center">
                <p class="flex items-center justify-center">
                    <img src="{{ asset('images/fleche-bas-gauche (2).png') }}" alt="" class="w-3 mr-2">
                    <a href="{{ route('showTransation') }}">Transfert argent</a>
                </p>
            </div>
            <div class="cursor-pointer p-3 shadow-md bg-red-600 text-white rounded-md w-full md:w-1/4 text-center">
                <p class="flex items-center justify-center">
                    <img src="{{ asset('images/balance-balance.png') }}" alt="" class="w-5 mr-2">
                    <a href="{{ route('ShowBlance') }}">Balance</a>
                </p>
            </div>
        </div>
    </div>
</section>



<section class="w-full max-w-4xl mx-auto px-4 flex flex-col space-y-4 bg-white p-4 rounded-lg shadow-sm">
    @foreach ($transaction as $transactions)
    <div class="flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('images/transaction (1).png') }}" alt="" class="md:w-12 w-9">
            <div class="md:ml-4">
                <h2 class="font-bold ml-1">Receiver: {{ $transactions->receiver }}</h2>
                <h4 class="text-sm text-gray-500 ml-1">Sender: {{ $transactions->sender }}</h4>
            </div>
        </div>

        <div class="flex items-center space-x-4">
            <p class="font-bold">{{ $transactions->montant }} FCFA</p>
            <a href="">
                <button type="button" class="cursor-pointer">
                    <img src="{{ asset('images/editer.png') }}" alt="editer" class="md:w-5 w-6 mt-1">
                </button>
            </a>
            <form action="" method="POST">
                <button type="submit" class="cursor-pointer">
                    <img src="{{ asset('images/supprimer.png') }}" alt="Supprimer" class="md:w-5 w-6 mt-1">
                </button>
            </form>
        </div>
    </div>
    @endforeach
</section>




<footer class="w-full max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-6 border-t border-gray-200 dark:border-neutral-700">
        <div class="flex flex-wrap justify-between items-center gap-2">
        <div>
            <p class="text-xs text-gray-600 dark:text-neutral-400">
            © 2025 Fer-Transfert.
            </p>
        </div>
        <ul class="flex flex-wrap items-center">
            <li class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400 dark:text-neutral-500 dark:before:bg-neutral-600">
            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400" href="https://www.linkedin.com/in/monneka-ange-eloge-kohou-143415327/">
                Linkedin
            </a>
            </li>
        <li class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400 dark:text-neutral-500 dark:before:bg-neutral-600">
            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400" href="https://portfolio.elogekohou.site/">
            Youtube
            </a>
        </li>
        <li class="inline-block pe-4 text-xs">
            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400" href="#">
            Github
            </a>
        </li>
        </li>
    </ul>
    </div>
</div>
</footer>



</body>
</html>
