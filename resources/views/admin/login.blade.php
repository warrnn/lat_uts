<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="h-screen">
        <div class="w-[500px] h-auto rounded border-2 mx-auto mt-24">
            <div class="bg-[#343a40] p-4">
                <h1 class="text-3xl text-white text-center">WELCOME!</h1>
            </div>
            <div>
                <form action="" class="mx-4 mt-4 flex flex-col">
                    <div class="flex flex-col">
                        <label for="">Username</label>
                        <input type="text" class="border-2 rounded p-1">
                    </div>
                    <div class="flex flex-col">
                        <label for="">Password</label>
                        <input type="password" class="border-2 rounded p-1">
                    </div>
                    <input type="submit" value="Login" class="bg-[#343a40] text-white rounded p-2 my-4">
                </form>
            </div>
        </div>
    </section>
</body>

</html>