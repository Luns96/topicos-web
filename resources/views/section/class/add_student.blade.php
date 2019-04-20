<div class="card mr-1 ml-1">
        <div class="card-header"><h1>Add student in class</h1></div>
        <div class="card-body">
            <form action="{{ route('class.store', $id) }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="id" class="col-form-label">Student</label>
                    <div class="col-sm-10">
                        <select name="id" class="custom-select">
                            @foreach ($student as $item => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="input-group-text" for="day">day</label>
                    <select class="custom-select col-sm-2" name="day" id="day">
                        <option value="1">Monday</option>
                        <option value="2">Tuesday</option>
                        <option value="3">Wednesday</option>
                        <option value="4">Thrusday</option>
                        <option value="5">Friday</option>
                    </select>
                    <label class="input-group-text" for="time">time</label>
                    <select class="custom-select col-sm-2" name="time" id="time">
                        <option value="1">6:00-8:00 AM</option>
                        <option value="2">8:00-10:00 AM</option>
                        <option value="3">10:00-12:00 AM</option>
                        <option value="4">0:00-2:00 PM</option>
                        <option value="5">2:00-4:00 PM</option>
                        <option value="6">4:00-6:00 PM</option>
                        <option value="7">6:00-8:00 PM</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Everything correct?')">Confirm</button>
            </form>
        </div>
    </div>
    