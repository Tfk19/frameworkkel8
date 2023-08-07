<table>
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama User</th>
            <th class="text-center">Pengajar</th>
            <th class="text-center">Type</th>
            <th class="text-center">Waktu</th>
            <th class="text-center">Link WA</th>
            <th class="text-center">Nilai Membaca Al-Qur'an</th>
            <th class="text-center">Nilai Tajwid</th>
            <th class="text-center">Nilai Ibadah Qouliyah</th>
            <th class="text-center">Nilai Ibadah Fi'liyah</th>
            <th class="text-center">Nilai Juz Amma</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bimbingans as $index => $bimbingan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td class="text-center">{{ $bimbingan->name}}</td>
                <td class="text-center">{{ $bimbingan->user->name }}</td>
                <td class="text-center">{{ $bimbingan->type }}</td>
                <td class="text-center">{{ $bimbingan->waktu }}</td>
                <td class="text-center">{{$bimbingan->linkwa }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
