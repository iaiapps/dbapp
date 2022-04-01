<div>
    <form wire:submit.prevent="store">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="form-floating">
                    <input wire:model="date" class="form-control" type="date" placeholder="Tanggal" required />
                    <label for="floatingTextarea">Tanggal</label>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="form-floating">
                    <input wire:model="activity" class="form-control" placeholder="Tugas kedinasan"
                        id="floatingTextarea" required>
                    <label for="floatingTextarea">Tugas Kedinasan</label>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="form-floating">
                    <input wire:model='jam' class="form-control" type="number" placeholder="Berapa jam?" required />
                    <label for="floatingTextarea">Jumlah jam</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="btn-group mt-3 w-100">
                <button type="submit" class="btn btn-success ">Submit</button>
                <a href="{{ route('journal_export') }}" class="btn btn-warning ">Export</a>
            </div>
        </div>
    </form>
</div>
