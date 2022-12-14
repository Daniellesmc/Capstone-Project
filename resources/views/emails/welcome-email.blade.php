<!DOCTYPE html>
<html lang="en">

@include('emails.head')

<style>
    p {
        color: #000;
        font-size: 16px;
    }

    h3 {
        font-size: 18px;
        color: #ff7200;
    }
</style>

<body>
    <div style="text-align: center; margin-top: 150px">
        <br>

        <div>
            <h3 style="margin-bottom: 24px; line-height: 50px; font-size: 36px">{{ $user->first_name }} {{ $user->last_name }}, Welcome to
                JustAttend</span>
            </h3>
        </div>

        <br>

        <h3 style="margin-bottom: 12px; line-height: 50px">Here are your credentials</span>
        </h3>
        <div>
            <p><strong>Email:</strong> &nbsp;{{ $user->email }}</p>
            {{-- <br />
            <p><strong>Password:</strong> &nbsp;{{ $user->password }}</p> --}}
            <br />
            <p><strong>Student ID:</strong> &nbsp;{{ $user->student_id }}</p>

            <br>
            <br>

            {{--Generated QR Code--}}

            {{QrCode::size(250)->generate($user->first_name)}}


        </div>

        <br>
        <br>

        <div class="client-container info-div" style="margin-bottom: 5px;">
            <div style="margin: 10px 0px;">
                <p>Attatched is the QR Code that you will use to log your attendance.</p>
            </div>
            {{--<div style="margin: 30px 0px;">
                <a href={{ env('APP_URL') }}
                    style="border-radius: 5px; background-color: #ff7200; color: white;
               padding: 10px 20px; text-transform: uppercase; font-weight: bold;">Login</a>
            </div> --}}
        </div>

        <br>

    </div>
</body>

</html>
