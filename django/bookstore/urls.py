from django.urls import path, include
from . import views
app_name = 'bookstore'

urlpatterns = [
    path('', views.index, name='home'),
    path('book_details/<int:book_id>', views.book_detail, name="book-details"),
    path('book_delete/<int:book_id>', views.book_delete, name="book-delete"),
    path('book_update/<int:book_id>', views.book_update, name="book-update"),
    path('book_create/', views.create_new_book, name="book-create")
]
