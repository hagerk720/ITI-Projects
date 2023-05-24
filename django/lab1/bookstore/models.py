from django.db import models

# Create your models here.


class Book(models.Model):
    name = models.CharField("Book Name", max_length=255)
    description = models.TextField("Book Description")
    rate = models.PositiveIntegerField("Book Rating", default=0)
    author_name = models.CharField("Book Author Name", max_length=255)
    release_date = models.DateField("Book Release Date", null=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
