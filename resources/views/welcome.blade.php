<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="bg-gray-100 w-screen h-screen flex justify-center items-center">
    <div class="bg-white rounded-lg shadow w-96 h-fit p-8">
      <h1 class="text-center mb-4 font-bold text-lg">Daftar Member</h1>
      <form action="" class="grid grid-cols-3 gap-4">
          <label>Nama : </label>
          <input type="text" class="border border-indigo-600 col-span-2">
          <label>No Telf :</label>
          <input type="text" class="border border-indigo-600 col-span-2">
          <label>Email :</label>
          <input type="email" class="border border-indigo-600 col-span-2">

        <button type="submit" class="col-span-3 bg-indigo-600 text-white py-2 rounded-lg">Simpan</button>
      </form>
    </div>
  </div>
</body>
</html>