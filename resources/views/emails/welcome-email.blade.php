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
        color: #8C2434;
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
        </div>

        <br>
        <br>

        <div class="client-container info-div" style="margin-bottom: 5px;">
            <div style="margin: 10px 0px;">
                <p>Login to see more details.</p>
            </div>
            <div style="margin: 30px 0px;">
                <a href={{ env('APP_URL') }}
                    style="border-radius: 5px; background-color: #333366; color: white;
               padding: 10px 20px; text-transform: uppercase; font-weight: bold;">Login</a>
            </div>
        </div>

        <br>

    </div>
</body>

</html>
