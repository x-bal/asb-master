<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="file_no">File No</label>
            <input name="file_no" id="file_no" type="text" value="{{ $caselist->file_no ?? '' }}" class="form-control @error('file_no') is-invalid @enderror">
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
            <select name="insurance" autocomplete="on" id="insurance" class="form-control @error('insurance') is-invalid @enderror">
                @foreach($client as $data)
                <option @if($data->id == $caselist->insurance_id) selected @endif value="{{ $data->id }}">{{ $data->brand }} - {{ $data->name }}</option>
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
                <option @if($data->id == $caselist->adjuster_id) selected @endif value="{{ $data->id }}">{{ $data->name }}</option>
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
            <input type="text" id="insured" value="{{ $caselist->insured }}" name="insured" class="form-control @error('insured') is-invalid @enderror">
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
            <input type="date" value="{{ $caselist->dol ?? '' }}" id="dol" name="dol" class="form-control @error('dol') is-invalid @enderror">
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
            <input type="text" id="risk_location" value="{{ $caselist->risk_location }}" name="risk_location" class="form-control @error('risk_location') is-invalid @enderror">
            @error('risk_location')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="currency">Currency</label>
            <select class="form-control @error('currency') is-invalid @enderror" name="currency" id="currency">
                <option @if($caselist->currency == 'RP') selected @endif value="RP">RP</option>
                <option @if($caselist->currency == 'USD') selected @endif value="USD">USD</option>
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
            <select class="form-control @error('broker') is-invalid @enderror" name="broker" id="broker">
                @foreach($broker as $data)
                <option @if($data->id == $caselist->broker_id) selected @endif value="{{ $data->id }}">{{ $data->nama_broker }}</option>
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
            <select class="form-control @error('incident') is-invalid @enderror incident" name="incident" id="incident">
                @foreach($incident as $data)
                <option @if($data->id == $caselist->incident_id) selected @endif value="{{ $data->id }}">{{ $data->type_incident }}</option>
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
            <select class="form-control @error('policy') is-invalid @enderror" name="policy" id="policy">
                @foreach($policy as $data)
                <option @if($data->id == $caselist->policy_id) selected @endif value="{{ $data->id }}">{{ $data->type_policy }}</option>
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
            <input class="form-control @error('leader') is-invalid @enderror" value="{{ $caselist->leader ?? '' }}" name="leader" id="leader" type="text">
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
            <input class="form-control @error('begin') is-invalid @enderror" value="{{ $caselist->begin }}" name="begin" id="begin" type="date">
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
            <input class="form-control @error('end') is-invalid @enderror" value="{{ $caselist->end }}" name="end" id="end" type="date">
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
            <label for="">LEADER / MEMBER <span id="total" name="total" class="badge badge-primary">{{ $caselist->member->sum('share') }}</span><strong>%</strong> </label>

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
                        @foreach($caselist->member as $row)
                        <tr>
                            <td>
                                <div class="form-group">
                                    <select name="member[{{ $row->id }}]" id="" class="form-control">
                                        @foreach($client as $data)
                                        <option @if($data->id == $row->member_insurance) selected @endif value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <input type="number" name="percent[{{ $row->id }}]" value="{{ $row->share ?? '' }}" oninput="LetMeHereToCount(this)" class="form-control percent">
                                        <span class="input-group-text" id="basic-addon3">%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="status[{{ $row->id }}]" id="status" class="form-control">
                                        <option @if($row->is_leader) selected @endif value="LEADER">LEADER</option>
                                        <option @if(!$row->is_leader) selected @endif value="MEMBER">MEMBER</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a onclick="DeleteForm(this)" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    setTimeout(function() {
        $('#incident').select2();
        $('#policy').select2();
        $('#broker').select2();
        $('#adjuster').select2();
        $('#insurance').select2();
    }, 1000)

    function form_dinamic() {
        let index = $('#dynamic_form tr').length + 1
        let template = `
            <tr>
                <td>
                    <div class="form-group">
                        <select name="member[${index}]" id="member_${index}" class="form-control">
                                @foreach($client as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <input type="number" name="percent[${index}]" oninput="LetMeHereToCount(this)" class="form-control percent">
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

        setTimeout(function() {
            $(`#member_${index}`).select2();
        }, 500)
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
        } else {
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