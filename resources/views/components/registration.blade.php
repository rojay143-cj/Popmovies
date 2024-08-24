<div class="modalreg w-full h-full fixed top-0 left-0 z-20 hidden">
    <div class="absolute left-5 top-20 p-3 rounded-lg z-50 w-fit m-auto bg-black bg-opacity-40 flex justify-center" style="display: none">
        <h4 class="success text-sm p-1 text-green-600 font-normal"></h4>
    </div>
    <div class="absolute left-5 top-20 p-3 rounded-lg z-50 w-fit m-auto bg-black bg-opacity-40 flex justify-center" style="display: none">
        <h4 class="error text-sm p-1 text-red-600 font-normal"></h4>
    </div>
    <div class="flex justify-center items-center h-full bg-zinc-800 bg-opacity-80 z-40 absolute inset-0"></div>
    <div
        class="registrationform translate-y-28 z-50 bg-gradient-to-bl from-zinc-900 to-zinc-800 rounded-md shadow-sm shadow-neutral-500 w-[30rem] h-fit p-5 mx-auto flex justify-center items-center relative">

        <form action="{{route('register')}}" method="POST" id="RegisterForm">
            @csrf
            <div class="body text-zinc-800 p-2 flex flex-col gap-3 w-96 text-xs mx-auto">
                <div class="head w-full flex justify-center items-center h-20 bg-zinc-800 rounded-md mb-5">
                    <h3 class="text-base font-semibold text-zinc-300">Create your account</h3>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="displayname" class="text-zinc-400">Nickname</label>
                    <input type="text" name="nickname" id="displayname"
                        class="w-full h-9 rounded-lg px-5 bg-gray-300 placeholder:text-zinc-800 placeholder:opacity-80"
                        placeholder="Display Name">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="e_mail" class="text-zinc-400">Email</label>
                    <input type="email" name="email" id="e_mail"
                        class="w-full h-9 rounded-lg px-5 bg-gray-300 placeholder:text-zinc-800 placeholder:opacity-80"
                        placeholder="Email address">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="user_name" class="text-zinc-400">Username</label>
                    <input type="text" name="username" id="user_name"
                        class="w-full h-9 rounded-lg px-5 bg-gray-300 placeholder:text-zinc-800 placeholder:opacity-80"
                        placeholder="Username">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="pass_word" class="text-zinc-400">Password</label>
                    <input type="password" name="password" id="pass_word"
                        class="w-full h-9 rounded-lg px-5 bg-gray-300 placeholder:text-zinc-800 placeholder:opacity-80"
                        placeholder="Password">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="confirmpassword" class="text-zinc-400">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="confirmpassword"
                        class="w-full h-9 rounded-lg px-5 bg-gray-300 placeholder:text-zinc-800 placeholder:opacity-80"
                        placeholder="Confirm Password">
                </div>
            </div>
            <div class="btn_register w-96 p-3 mx-auto gap-5 flex justify-evenly">
                <button type="button" id="btn_cancel"
                    class="text-zinc-800 bg-red-600 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-red-600">Cancel</button>
                <button type="button" id="btn_register"
                    class="text-zinc-800 bg-yellow-500 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-yellow-500">Register</button>
            </div>
        </form>
    </div>
</div>