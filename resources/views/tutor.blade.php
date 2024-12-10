<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <title>Home Page</title>

    <style>
        .paragraf-akhir{
            color: blue;
        }
    </style>

</head>
<body>
    <h1>Hello World - H1</h1>
    <h2>Hello World - H2</h2>
    <h3>Hello World - H3</h3>
    <h4>Hello World - H4</h4>
    <h5>Hello World - H5</h5>
    <h6>Hello World - H6</h6>

    {{-- Paragraph --}}
    {{-- CTRL + Z = Undo (Membatalkan perubahan) --}}
    <p>Ini paragarph</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, similique?</p>

    {{-- Untuk Redirect --}}
    <a href="https://www.google.com/">Ini Redirect Ke Google</a>

    {{-- Image --}}
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi1nkrYXY-ijQv5aCxkwooyg2roNFxj0ewJA&s" alt="Ini Foto Capybara">

    {{-- Line Break --}}
    <p>Ini Kalimat ke 1, Ini Kalimat ke 2 (Pakai Line Break)</p>
    <p>Lorem ipsum dolor sit, <br> amet consectetur adipisicing elit. <br>Dolorem fuga soluta inventore impedit, <br>ut excepturi repellendus animi illo at rem.</p>
    <p>Ini Kalimat ke 2</p>
    <br>
    <br>
    <br>
    {{-- Horizantal Line --}}
    <hr>
    <p>Ini Setelah Garis</p>

    {{-- Form --}}
    <form action="">
        <input type="text">
        <button type="submit">Ini Button</button>
    </form>

    <br>

    {{-- Input Type --}}
    <input type="text" name="" id="" placeholder="Masukkan Username">
    <br>
    <br>
    <input type="password" placeholder="Masukkan password">
    <br>
    <br>
    <input type="email" placeholder="Masukkan Email">
    <br>
    <br>
    <input type="number" placeholder="Masukkan angka">
    <br>
    <br>

    <input type="date">
    <br>
    <br>
    <input type="time" name="" id="">
    <br>
    <br>
    <input type="radio"> Male
    <input type="radio"> Female

    <br>
    <br>

    {{-- Button --}}
    <button type="submit">Click Here</button>
    <button type="reset">Reset</button>
    <button disabled="disabled">Disabled</button>

    <table>
        {{-- tr = table row --}}
        {{-- th = table head --}}
        {{-- td = table data --}}
        <tr>
            <th>Row Untuk Nama</th>
            <th>Row Untuk Umur</th>
        </tr>
        <tr>
            <td>Tono</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Budi</td>
            <td>15</td>
        </tr>
    </table>


    <div>
        <h1 style="color: black">Data Untuk Mahasiswa</h1>
        <p>Mahasiwa A, belum hadir</p>
    </div>

    {{-- Inline CSS = Dia ditulis langsung di tag / atribut HTML--}}
    <p style="color: rgb(64, 167, 20)">Halo Dunia</p>

    {{-- Internal CSS = Dia ditulis di HEAD HTML --}}
    <p class="paragraf-akhir">Halo Dunia Warna Biru</p>

    {{-- External CSS = Dia ditulis di File berbeda --}}
    <p class="paragraf">Halo dunia beda File</p>

    {{-- Selector --}}
    {{-- Class Selector --}}
    <h1 class="title">Toko Tono</h1>

    {{-- ID Selector --}}
    <h1 id="title-2">Toko Budi</h1>

    {{-- Element Selector --}}
    <p>Ini Di Styling Menggunakan Element Selector</p>



</body>
</html>