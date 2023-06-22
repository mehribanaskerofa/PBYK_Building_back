<div class="form-group col-4">
    <label for="item">Floor</label>
    <select name="floor" id="item">
        @for($i = 2; $i <=intval($project->floor); $i++)
            <option value="{{$i}}"
                @selected(old('floor',(isset($house) ? $house->floor : null))==$i)
            >{{$i }} floor</option>
        @endfor
    </select>
    @error('floor')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-4">
    <label for="item">Room</label>
    <select name="room" id="item">
        @for($i = 1; $i <=intval($project->room); $i++)
            <option value="{{$i}}"
                @selected(old('room',(isset($house) ? $house->room : null))==$i)
            >{{$i }}</option>
        @endfor
    </select>
    @error('room')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group col-4">
    <label for="item">House number</label>
    <select name="number" id="item">
        <?php $numberCount= intval($project->room)*intval($project->floor) ?>
        @for($i = 1; $i <=$numberCount; $i++)
            <option value="{{$i}}"
                @selected(old('number',(isset($house) ? $house->number : null))==$i)
            >{{$i }}</option>
        @endfor
    </select>
    @error('number')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
