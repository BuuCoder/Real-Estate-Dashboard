@extends('dashboard.layout')
@section('title', 'Edit Task')
@section('heading', 'Edit Task')
@section('content')
    <form class="space-y-6 max-w-2xl" method="POST" action="#">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium mb-1">Title</label>
            <input name="title" value="Create Signup Page"
                class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Description</label>
            <textarea name="description" rows="4"
                class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">Implement responsive signup UI and connect to backend.</textarea>
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Due Date</label>
                <input type="date" name="due_date" value="2025-08-31"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Assignees</label>
                <input name="assignees" value="dev1@company.com, dev2@company.com"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            </div>
        </div>
        <div class="flex items-center gap-3">
            <button class="rounded-xl bg-brand-600 text-white px-5 py-2.5 font-semibold hover:bg-brand-700">Save</button>
            <a href="{{ url()->previous() }}" class="text-gray-600 hover:text-slate-900">Cancel</a>
        </div>
    </form>
@endsection
