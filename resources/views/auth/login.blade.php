<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: poppins, sans-serif;
        }
    </style>
    <title>E-Raport - Login</title>
</head>
<body>
    <body class="antialiased bg-white">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class=" grid grid-cols-2 items-center h-screen  bg-[#213555] relative overflow-hidden">
                <div class="flex overflow-hidde n items-center justify-center">
                    <img src={{ url('/storage/aset/erapot.png') }} alt="" class="z-10">
                    <img src={{ url('/storage/aset/login.jpg') }}
                        class="absolute z-0 left-0 -top-10 mix-blend-multiply w-[50vw]" alt="">
                    {{-- <div class="bg-[url('/storage/aset/login.jpg')] w-screen h-screen  opacity-40 absolute top-0 left-0"></div> --}}
    
                    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores amet mollitia doloremque modi sint. Iusto sequi molestiae, sapiente facere necessitatibus perferendis, eos error dolorem voluptatum repellendus, ullam aut vel quam! --}}
                </div>
                <div class="bg-white z-10 h-full rounded-l-[3rem] flex flex-col justify-center items-center gap-5">
                    <div class="text-5xl font-black  text-[#213555] mb-5 font-serif">
                        Login
                    </div>
                    @if($errors->any())
                        <div class="bg-red-300 text-sm p-3 rounded text-left w-80">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{$item}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="flex relative">
                        <i class="fa-solid fa-envelope text-[#213555] px-1 py-2 absolute right-4 top-1/2 transform -translate-y-1/2"></i>
                        <Input type="email" name="email" id="email" value="{{old('email')}}" class=" accent-white text-black px-6 py-2 bg-slate border border-zinc-700 rounded-full placeholder:text-justify text-sm placeholder:text-sm placeholder:text-zinc-600 w-80 pr-11" placeholder="Username/Email" required/>
                    </div>
    
                    <div class="flex relative">
                        <i id="icon"class="fa-solid fa fa-eye-slash text-[#213555] px-1 py-2 absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer"></i>
                        <Input type="password" id="password" name="password" class="accent-white text-black px-6 py-2 bg-slate border border-zinc-700 rounded-full placeholder:text-justify text-sm placeholder:text-sm placeholder:text-zinc-600 w-80 pr-11" placeholder="Password" required/>
                    </div>
                    <div class="text-center">
                        <button class="text-sm bg-[#213555] text-white font-semibold rounded-full py-2.5 px-8 transition duration-75 ease-in-out">Login</buttonclass=>
                    </div>
                </div>
            </div>
    
        </form>
        <script>
            const icon = document.getElementById('icon');
            const password = document.getElementById('password');
    
            icon.addEventListener('click', function() {
                if (password.type === 'password') {
                    password.type = 'text'; 
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                } else {
                    password.type = 'password';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                }
            })
        </script>
    </body>
</body>
</html>