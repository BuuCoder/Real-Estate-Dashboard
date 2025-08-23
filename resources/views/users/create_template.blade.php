@extends('dashboard.layout')
@section('title', 'Create Task')
@section('heading', 'Create New Task')
@section('content')
    <form class="space-y-6 max-w-2xl" method="POST" action="#">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Title</label>
            <input name="title"
                class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                placeholder="e.g., Create Signup Page">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Description</label>
            <textarea name="description" rows="4"
                class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                placeholder="Short description..."></textarea>
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Due Date</label>
                <input type="date" name="due_date"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Assignees</label>
                <input name="assignees"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    placeholder="Comma separated emails">
            </div>
        </div>
        <div class="flex items-center gap-3">
            <button class="rounded-xl bg-brand-600 text-white px-5 py-2.5 font-semibold hover:bg-brand-700">Create</button>
            <a href="{{ url()->previous() }}" class="text-gray-600 hover:text-slate-900">Cancel</a>
        </div>
    </form>
@endsection
