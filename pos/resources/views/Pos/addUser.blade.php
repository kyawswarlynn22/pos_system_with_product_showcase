@extends('layout.sidebarandnav')

@section('title', 'Add New User');

@section('body')
    <p class=" text-xl font-semibold">Add New User</p>
 <section class=" flex justify-center">
    <div class=" flex flex-col w-96 mt-5 space-y-3">
        <label for="email">Email</label>
        <input type="email"  name="email"  id="">
        <label for="username">Username</label>
        <input type="text" name="username"  id="">
        <label for="role">Role</label>
        <select name="role" id="">
            <option value="">Admin</option>
            <option value="">Staff</option>
        </select>
        <label for="password">Password</label>
        <input type="password" name="password" id="">
        <label for="password">Confirm Password</label>
        <input type="password" name="Confirm Password" id="">
    </div>
   
 </section>
 <span class=" mt-10 ml-[82%]">
    <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
    <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
</span>
@endsection