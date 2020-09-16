<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tell Us About Your Service</title>
</head>
<body>
    <div class="container">
        <h1>Talk About Your Experience</h1>
        
        User <u><strong>{{ $qr }}</strong></u> Helped You In Some Way, Tell Us About it!<br /><br>
        <form action="/submit-story" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="user_secondary_id" value="{{ $qr }}">
            <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
            <div class="form-group">
              <label for="your_name">Your Name</label>
              <input type="text" class="form-control" name="your_name" id="your_name" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="">What Type Of Service Was Performed</label>
              <input type="text" class="form-control" name="service_id" id="service_id" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="value">What is the Value?</label>
              $<input type="number" class="form-control" name="service_value" id="value" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="date_performed">When Did This Happen?</label>
              <input type="date" class="form-control" name="date_performed" id="date_performed" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="country">Country?</label>
              <input type="text" class="form-control" name="country" value="United States" readonly id="country" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="city">City?</label>
              <input type="text" class="form-control" name="city" id="city" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="state">State</label>
              <select class="form-control" name="state" id="state" aria-describedby="helpId" placeholder="">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            </div>
            <div class="form-group">
              <label for="">Describe What Happened</label>
              <textarea class="form-control" name="description" id="" rows="3"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Send</button>    
        </form>

    </div>

</body>
</html>