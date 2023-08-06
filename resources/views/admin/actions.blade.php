<div class="d-flex">
    <a href="{{ route('Bimbingan.show', ['Bimbingan' => $data->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
    {{-- <a href="{{ route('bimbingan.edit', ['bimbingan' => $data->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a> --}}

    <div>
        {{-- <form action="{{ route('bimbingans.destroy', ['bimbingan' => $data->id]) }}" method="POST"> --}}
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
