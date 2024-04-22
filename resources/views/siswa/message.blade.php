@include('siswa.statusPrakerin.header')
@include('siswa.statusPrakerin.sidebar')
        <div class="message-content text-center text-decoration-none">
            @if (isset($data) && is_array($data))

                @foreach ($data as $message)

                    <h3 class="message-judul">{{ $message['judul'] }}</h3>
                    <p class="message-deskripsi">{{ $message['deskripsi'] }}</p>

                    @if(isset($message['sertifikat']))
                    <a class="p-3 text-danger" href="{{ route('file.download', ['filename' => $message->sertifikat]) }}" download>Unduh Sertifikat |</a>
                    <a href="{{ route('file.view', ['id' => $message['id']]) }}" target="_blank">| Lihat Sertifikat</a>
                    @endif

                @endforeach

            @else

                <p>Error: Invalid message data</p>

            @endif
        </div>
@include('siswa.statusPrakerin.footer')
