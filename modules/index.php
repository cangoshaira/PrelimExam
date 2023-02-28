<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrelimExam</title>
    <link rel="stylesheet" type="text/css" href="newstyle.css">
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Shantell+Sans:wght@300&family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Shantell+Sans:wght@300&family=Zilla+Slab:wght@300&display=swap');

        .font-family-oswald {
            font-family: oswald;
        }
    </style>
</head>

<body class="font-family-oswald bg-gradient-to-t from-[#54b2bbe7] to- [#34336b] h-screen">
	<header class="bg-white">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
                <img class="w-16 cursor-pointer" src="https://www.transparentpng.com/thumb/s/VquuBK-student-council-elections-sjcc-writes.png" alt="...">
            </div>
            <div
                class="nav-links duration-500 md:static absolute text-2xl bg-white md:min-h-fit min-h-[80vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-blue-500" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-rose-500" href="studentadd.php">Add</a>
                    </li>
                    <li>
                        <a class="hover:text-rose-500" href="student.php">Lists</a>
                    </li>
                    <li>
                        <a class="hover:text-rose-500" href="#">About</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign in</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>

            


            
    </header>



    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>