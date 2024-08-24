<div class="modallogin w-full h-full fixed top-0 left-0 z-20 hidden">
    <div class="flex justify-center items-center h-full bg-zinc-800 bg-opacity-80 z-40 absolute inset-0"></div>
    <div
        class="loginform translate-y-28 z-50 bg-gradient-to-bl from-zinc-900 to-zinc-800 rounded-md shadow-sm shadow-neutral-500 w-[30rem] h-fit p-5 mx-auto flex justify-center items-center relative">

        <form action="" method="post">
            @csrf
            <div class="body text-zinc-800 p-2 flex flex-col gap-3 w-96 text-xs mx-auto">
                <div class="head w-full flex justify-center items-center h-20 bg-zinc-800 rounded-md mb-5">
                    <h3 class="text-base font-semibold text-zinc-300">Hi!, Welcome Back</h3>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="verify" class="text-zinc-400">Email / Username</label>
                    <input type="text" name="login" value="{{old('login')}}" id="verify" class="w-full h-9 rounded-lg px-5 bg-gray-300 placeholder:text-zinc-800 placeholder:opacity-80"
                        placeholder="Username or Email">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="login_pass" class="text-zinc-400">Password</label>
                    <input type="password" name="password" id="login_pass" class="w-full h-9 rounded-lg px-5 bg-gray-300 placeholder:text-zinc-800 placeholder:opacity-80"
                        placeholder="Password">
                </div>
            </div>
            <div class="btn_register w-96 p-3 mx-auto gap-5 flex justify-evenly">
                <button type="button" id="btn_can"
                    class="text-zinc-800 bg-red-600 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-red-600">Cancel</button>
                <button type="submit" id="btn_login"
                    class="text-zinc-800 bg-yellow-500 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-yellow-500">Register</button>
            </div>
        </form>
    </div>
</div>