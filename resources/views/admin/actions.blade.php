<div class="d-flex">
    <a href="{{ route('Bimbingan.show', ['Bimbingan' => $data->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
    <a href="{{ route('Bimbingan.edit', ['Bimbingan' => $data->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

    {{-- <div>
        <form action="{{ route('Bimbingan.destroy', ['Bimbingan' => $data->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="{{ $bimbingan->firstname.' '.$bimbingan->lastname }}">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div> --}}
</div>
