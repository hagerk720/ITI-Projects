from django.shortcuts import render, redirect
from django.http import HttpResponse
from .models import Book
from .forms import BookForm

# Create your views here.

def index(request):
    all_books = Book.objects.all()
    my_context = {'books_list': all_books}
    return render(request, 'home.html', my_context)


def book_detail(request, *args, **kwargs):
    book_id = kwargs.get('book_id')
    book = Book.objects.get(pk=book_id)
    return render(request, 'book_details.html', context={"book": book})


def book_delete(request, **kwargs):
    book_id = kwargs.get('book_id')
    Book.objects.get(pk=book_id).delete()
    return redirect('bookstore:book-index')


def book_update(request, **kwargs):
    book_id = kwargs.get('book_id')
    book = Book.objects.get(pk=book_id)
    form = BookForm(instance=book)
    if request.method == "PUT":
        form = BookForm(data=request.POST, instance=book)
        if form.is_valid():
            print ("hhhh")
            form.save()
            return redirect("bookstore:book-detail", pk=book.id)
        print (form)
    return render(request, 'book_update.html', context={
        'form': form,
        'book': book
    })

def book_create(request):
    form = BookForm()
    if request.method == "POST":
        form = BookForm(data=request.POST)
        if form.is_valid():
            form.save()
            return redirect("bookstore:book-index")
    return render(request, 'book_create.html', context={
        'form': form
    })
