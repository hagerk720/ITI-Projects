# Generated by Django 4.2.1 on 2023-05-23 18:46

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('bookstore', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='book',
            name='slug',
            field=models.SlugField(default=''),
            preserve_default=False,
        ),
    ]