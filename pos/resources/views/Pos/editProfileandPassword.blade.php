@extends('layout.sidebarandnav')

@section('title', 'Add Product');

@section('body')
<div class="px-5">
    <p class="text-xl font-semibold font-philosopher pb-5">Update Profile and Passwod</p>
    <form action="../Controller/updateprofileController.php" method="post" enctype="multipart/form-data">
        <section class=" border border-gray-400 rounded-lg shadow-lg p-3">
            <p class="font-semibold py-5">Update Profile</p>
            <div class=" w-[50%] mx-auto space-y-6">
                <div class=" flex-col flex items-center justify-between">
                    <div class=" w-20 shadow-xl border-2 border-blue-950">
                        <label for="profile1">
                            <img class="w-20" src="{{ asset('images/SKS Logo.png') }}" id="profileimg1" alt="">
                        </label>
                        <input type="file" class="hidden" id="profile1" accept=".png,.jpeg" name="profile1">
                    </div>
                </div>
                <div class=" flex items-center justify-between">
                    <p class=" w-40">Username</p>
                    <p>- </p>
                    <div class="">
                        <input type="text" name="username" require value="" class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                    </div>
                </div>
              
                <div class=" flex items-center justify-between">
                    <p class=" w-40">Phone</p>
                    <p>-</p>
                    <div class="">
                        <input type="text" name="phone" require value="" class=" border border-gray-400 rounded-md  ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                    </div>
                </div>
            </div>
            <div class=" justify-end flex pr-5 py-3">
                <input id="updates" type="submit" value="Update" class=" font-playfairDisplay px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md"></input>
            </div>
        </section>
    </form>
    <section class="border border-gray-400 rounded-lg shadow-lg p-3">
        <p class=" font-semibold">Change Password</p>
        <div class=" w-[50%] mx-auto space-y-6 pt-3">
            <div class=" flex items-center justify-between">
                <p class=" w-40">Current Password</p>
                <p>-</p>

                <form action="../Controller/passwordchangeContoller.php" method="post">
                    <div class="">
                        <input type="password" value="" name="current" class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                    </div>
            </div>
            <div class=" flex items-center justify-between">
                <p class=" w-40">New Password</p>
                <p>-</p>
                <div class="">
                    <input type="password" value="" name="new" class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                </div>
            </div>
            <div class=" flex items-center justify-between">
                <p class=" w-40">Confirm Password</p>
                <p>-</p>
                <div class="">
                    <input type="password" value="" name="confirm" class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                </div>
            </div>

        </div>
        <div class=" justify-end flex pr-5 py-3">
            <button id="update" type="submit" name="updated" value="Change" class=" font-playfairDisplay px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md">Change</button>
        </div>
        </form>
    </section>
</div>
<div id="delhid" class=" absolute top-20 mt-40 ml-60 hidden">

</div>

<script>
    document.getElementById('update').addEventListener('click', (e) => {
        document.getElementById('delhid').classList.add('show');
        document.getElementById('delhid').classList.remove('hidden');
    })
    document.getElementById('updates').addEventListener('click', (e) => {
        document.getElementById('delhid').classList.add('show');
        document.getElementById('delhid').classList.remove('hidden');
    })
    document.getElementById('no').addEventListener('click', (e) => {
        document.getElementById('delhid').classList.add('hidden');
        document.getElementById('delhid').classList.remove('show');
    })
</script>
@endsection