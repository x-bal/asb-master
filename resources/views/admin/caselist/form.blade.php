<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="file_no">File No</label>
            <input name="file_no" id="file_no" type="text" value="{{ $bank->file_no ?? '' }}" class="form-control @error('file_no') is-invalid @enderror">
            @error('file_no')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="insurance">Insurance</label>
            <select name="insurance" id="insurance" class="form-control @error('insurance') is-invalid @enderror">
                @foreach($client as $data)
                <option value="{{ $data->id }}">{{ $data->brand }} - {{ $data->name }}</option>
                @endforeach
            </select>
            @error('insurance')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="adjuster">Adjuster</label>
            <select name="adjuster" id="adjuster" class="form-control @error('adjuster') is-invalid @enderror">
                @foreach($user as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
            </select>
            @error('adjuster')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="insured">Insured</label>
            <input type="text" id="insured" name="insured" class="form-control @error('insured') is-invalid @enderror">
            @error('insured')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="dol">dol</label>
            <input type="date" id="dol" name="dol" class="form-control @error('dol') is-invalid @enderror">
            @error('dol')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="risk_location">risk location</label>
            <input type="text" id="risk_location" name="risk_location" class="form-control @error('risk_location') is-invalid @enderror">
            @error('risk_location')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="currency">risk location</label>
            <select class="form-control" name="currency" id="currency">
                <option value="RP">RP</option>
                <option value="USD">USD</option>
            </select>
            @error('currency')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="broker">Broker</label>
            <select class="form-control" name="broker" id="broker">
                @foreach($broker as $data)
                <option value="{{ $data->id }}">{{ $data->nama_broker }}</option>
                @endforeach
            </select>
            @error('broker')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="incident">incident</label>
            <select class="form-control" name="incident" id="incident">
                @foreach($incident as $data)
                <option value="{{ $data->id }}">{{ $data->type_incident }}</option>
                @endforeach
            </select>
            @error('incident')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="policy">policy</label>
            <select class="form-control" name="policy" id="policy">
                @foreach($policy as $data)
                <option value="{{ $data->id }}">{{ $data->type_policy }}</option>
                @endforeach
            </select>
            @error('policy')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="leader">Leader</label>
            <input class="form-control" name="leader" id="leader" type="text">
            @error('leader')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="begin">begin</label>
            <input class="form-control" name="begin" id="begin" type="date">
            @error('begin')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="end">end</label>
            <input class="form-control" name="end" id="end" type="date">
            @error('end')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">LEADER / MEMBER <span id="total" class="badge badge-primary">20</span> </label>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Member</th>
                            <th>Member Share</th>
                            <th>Status</th>
                            <th class="text-center">
                                <a onclick="AddForm()" class="btn btn-outline-success" id="add">Add Member</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="dynamic_form">
                        <!-- <tr>
                            <td>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        @foreach($client as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <input type="text" oninput="LetMeHereToCount(this)" class="form-control percent">
                                        <span class="input-group-text" id="basic-addon3">%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="status" id="status" class="form-control">
                                        <option value="LEADER">LEADER</option>
                                        <option value="MEMBER">MEMBER</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a onclick="DeleteForm(this)" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function form_dinamic() {
        let index = $('#dynamic_form tr').length + 1
        let template = `
            <tr>
                <td>
                    <div class="form-group">
                        <select name="member[${index}]" id="" class="form-control">
                                @foreach($client as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <input type="text" name="percent[${index}]" oninput="LetMeHereToCount(this)" class="form-control percent">
                                <span class="input-group-text" id="basic-addon3">%</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <select name="status[${index}]" id="status" class="form-control">
                                <option value="LEADER">LEADER</option>
                                <option value="MEMBER">MEMBER</option>
                            </select>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a onclick="DeleteForm(this)" class="btn btn-outline-danger">Delete</a>
                    </div>
                </td>
            </tr>
    `
        $('#dynamic_form').append(template)

    }

    function LetMeHereToCount(qr) {
        let input = $(qr).val()
        let coll = document.querySelectorAll('.percent')
        let total = 0
        for (let i = 0; i < coll.length; i++) {
            let ele = coll[i]
            total += parseInt(ele.value)
        }
        if (total > 100) {
            $('#submit_case_list').addClass('disabled')
            $('#add').addClass('disabled')
            $('#total').html('Lebih')
        }else{
            $('#submit_case_list').removeClass('disabled')
            $('#add').removeClass('disabled')
            $('#total').html(total)
        }
    }

    function AddForm() {
        event.preventDefault()
        form_dinamic()
    }

    function DeleteForm(qr) {
        event.preventDefault()
        $(qr).parent().parent().parent().remove()
        LetMeHereToCount()
    }
</script>