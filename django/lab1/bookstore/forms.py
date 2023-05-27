from django.forms import ModelForm
from .models import Book
from django import forms


class BookForm(ModelForm):
    class Meta:
        model = Book
        fields = '__all__'
        # fields = ['name', 'description', 'author_name', 'poster']
        widgets = {
            'name': forms.TextInput(attrs={'class': 'form-control'}),
            'release_date':forms.DateInput(attrs={'type': 'date'}),
            'description': forms.Textarea(attrs={'class': 'form-control', 'rows': 5}),
            'author_name': forms.TextInput(attrs={'class': 'form-control'})
            # 'poster': forms.FileInput(attrs={'class': 'form-control-file'})
        }
