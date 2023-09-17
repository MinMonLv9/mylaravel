<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food Register</title>
</head>

<body>
    <nav class="bg-gray-800 mb-5">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-dark", Default: "text-gray-300 hover:bg-gray-700 hover:text-dark" -->
                            <a href="#" class="bg-gray-900 text-dark rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Dashboard</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-dark rounded-md px-3 py-2 text-sm font-medium">Team</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-dark rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-dark rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-dark focus:outline-none focus:ring-2 focus:ring-dark focus:ring-offset-2 focus:ring-offset-gray-800">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="drawer lg:drawer-open ">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <div class="flex flex-row w-100">
                <div class="flex flex-row w-1/2">
                    <div class="relative mt-10 m-3 flex w-full max-w-xs flex-col overflow-hidden rounded-lg shadow-md">
                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                            <img class="object-cover"
                                src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="product image" />
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#"
                                class="flex items-center justify-center rounded-md rounded-full bg-gray-800 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                Browse</a>
                        </div>
                    </div>
                    <div
                        class="w-full relative m-3 flex flex-col overflow-hidden rounded-lg shadow-md">
                        <form class=" rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                                <label class="block text-dark text-sm font-bold mb-2">
                                    Food Name
                                </label>
                                <input
                                    class="shadow appearance-none  rounded w-full py-2 px-3 text-dark leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text">
                            </div>
                            <div class="mb-4">
                                <label class="block text-dark text-sm font-bold mb-2">
                                    Description
                                </label>
                                <textarea
                                    class="shadow appearance-none rounded w-full py-2 px-3 text-dark leading-tight focus:outline-none focus:shadow-outline resize-none">
                                </textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-dark text-sm font-bold mb-2">
                                    Ingredients
                                </label>
                                <textarea
                                    class="shadow appearance-none rounded w-full py-2 px-3 text-dark leading-tight focus:outline-none focus:shadow-outline resize-none">
                                </textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-dark text-sm font-bold mb-2">
                                    Price
                                </label>
                                <input
                                    class="shadow appearance-none  rounded w-full py-2 px-3 text-dark leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="number">
                            </div>
                            <div class="mb-10">
                                <label class="block text-dark text-sm font-bold mb-2">
                                    Category
                                </label>
                                <select
                                    class="shadow rounded w-full py-2 px-3 text-dark leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="number">
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="relative m-3 flex w-1/2 flex-col overflow-hidden rounded-lg shadow-md">
                    <label class="block text-dark text-xl font-bold mb-2">
                        Food Type Detail
                    </label>
                    <hr>
                    <div class="flex flex-row m-3">
                        <input
                            class="appearance-none  rounded w-full py-2 px-3 text-dark leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text">
                        <button
                            class="ml-3 bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Search
                        </button>
                    </div>
                    <div>
                        <table class="w-full text-center">
                            <thead>
                                <tr class="">
                                    <th>
                                        Type Name
                                    </th>
                                    <th>
                                        Type Name
                                    </th>
                                    <th>
                                        Remark
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        <button
                                            class="ml-3 bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                            type="button">
                                            Add
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        <button
                                            class="ml-3 bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                            type="button">
                                            Add
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        <button
                                            class="ml-3 bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                            type="button">
                                            Add
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        Burger
                                    </td>
                                    <td>
                                        <button
                                            class="ml-3 bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                            type="button">
                                            Add
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>

            </div>
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>
            </ul>
        </div>
    </div>

</body>

</html>