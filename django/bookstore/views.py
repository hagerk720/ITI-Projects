from django.shortcuts import render, redirect
from django.http import HttpResponse

# Create your views here.

books_list = [
    {
        'index': 0,
        'id': 1,
        'name': 'TASK-1',
        'Author': "hhh",
    },
    {
        'index': 1,
        'id': 2,
        'name': 'TASK-2',
        'Author': "hhh",
    },
    {
        'index': 2,
        'id': 3,
        'name': 'TASK-3',
        'Author': "hhh",
    },
]


def index(request):
    my_context = {'books_list': books_list}
    return render(request, 'home.html', my_context)


def book_detail(request, *args, **kwargs):
    book_id = kwargs.get('book_id')
    book_object = _get_book(book_id)
    my_context = {
        'book_id': book_object.get('id'),
        'book_name': book_object.get('name'),
        'book_Author': book_object.get('Author')
    }

    return render(request, 'book_details.html', context=my_context)


def book_delete(request, **kwargs):
    task_id = kwargs.get('book_id')
    task_object = _get_book(task_id)
    if books_list:
        books_list.remove(task_object)
    return redirect('bookstore:home')


def book_update(request, **kwargs):
    book_id = kwargs.get('book_id')
    book_object = _get_book(book_id)
    for book in books_list:
        if book == book_object:
            book['name'] = f"Update {book_object['name']}"

    return redirect('bookstore:home')


def _get_book(book_id):
    for book in books_list:
        if 'id' in book and book['id'] == book_id:
            return book
    return None


def create_new_book(request):
    new_index = max(book['index'] for book in books_list) + 1
    new_task = {
        'index': new_index,
        'id': new_index + 1,
        'name': "book" + str(new_index),
        'Author': "yyy",
    }
    books_list.append(new_task)
    return redirect('bookstore:home')
