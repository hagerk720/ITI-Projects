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
    poster = models.ImageField(upload_to='images',null=True , blank=True)
    category = models.ManyToManyField("Category")


class Category(models.Model):
    name = models.CharField(max_length=255)
    id_name = models.OneToOneField("IdNumber", on_delete=models.CASCADE)
    def __str__(self):
        return self.name

class IdNumber(models.Model):
    number = models.CharField(max_length=150, unique=True)
    def __str__(self):
        return self.number