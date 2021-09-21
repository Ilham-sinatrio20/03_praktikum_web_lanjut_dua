@extends('partials.sidebar')
    @section('content')
        <div id="content" class="p-4 p-md-5">
            @include('partials.navbar')
            <h2 class="mb-4">Program</h2>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Acara</th>
                        <th>Bintang tamu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>Minggu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>08.00 - 10.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>Bincang Bola&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>Cristiano Ronaldo&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Senin</td>
                        <td>08.00 - 10.00</td>
                        <td>Bincang Basket</td>
                        <td>Jason Williams</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Selasa</td>
                        <td>08.00 - 10.00</td>
                        <td>Bincang Voli</td>
                        <td>Ivan Zaytsev</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Rabu</td>
                        <td>08.00 - 10.00</td>
                        <td>Bincang Badminton&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>Ahsan dan Hendra</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Kamis</td>
                        <td>08.00 - 10.00</td>
                        <td>Bincang Futsal</td>
                        <td>Ardiansyah Nur</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Jum'at</td>
                        <td>08.00 - 10.00</td>
                        <td>Bincang Renang</td>
                        <td>Johny Weimuller</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Sabtu</td>
                        <td>08.00 - 10.00</td>
                        <td>Bincang Lari</td>
                        <td>Muhammad Zohri</td>
                    </tr>

                </tbody>
            </table>
            <br>
            <p>Program ini selaras dengan tujuan Website ini dibuat, yakni untuk menampung dan menyajikan informasi mengenai olahraga
                di segala bidang dan menghadirkan bintang-bintang favorit yang akan memberikan ilmunya kepada masyarakat
                terkait bidang olahraga yang mereka tekuni.
            </p>
        </div>
    @endsection
</body>

</html>
