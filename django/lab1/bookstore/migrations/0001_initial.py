# Generated by Django 4.2.1 on 2023-05-23 18:24

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Book',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=255, verbose_name='Book Name')),
                ('description', models.TextField(verbose_name='Book Description')),
                ('rate', models.PositiveIntegerField(verbose_name='Book Rating')),
                ('author_name', models.CharField(max_length=255, verbose_name='Book Author Name')),
                ('release_date', models.DateField(verbose_name='Book Release Date')),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
            ],
        ),
    ]
