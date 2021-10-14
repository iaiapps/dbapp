<div>
    <form wire:submit.prevent="store">
        <div class="row">
            <div class="col-md mt-2">
                <div class="form-floating">
                    <input wire:model="date" class="form-control" type="date" placeholder="Tanggal" required/>
                    <label for="floatingTextarea">Tanggal</label>
                </div>
            </div>
            <div class="col-md mt-2">
                <div class="form-floating">
                    <input wire:model="activity" class="form-control" placeholder="Tugas kedinasan" id="floatingTextarea" required>
                    <label for="floatingTextarea">Tugas Kedinasan</label>
                </div>
            </div>
            <div class="col-md mt-2">                
                <div class="form-floating">
                    <input wire:model='jam' class="form-control" type="number" placeholder="Berapa jam?" required />
                    <label for="floatingTextarea">Jumlah jam</label>
                </div>
            </div>
            
            <div class="col-md mt-2">
                {{-- <div class="btn-group" role="group" aria-label="Basic mixed styles example"> --}}
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    <a href="{{route('journal_export')}}" class="btn btn-success btn-lg">Export</a>
                  {{-- </div> --}}
            </div>
        </div>
        <br>
        
    </form>
</div>
