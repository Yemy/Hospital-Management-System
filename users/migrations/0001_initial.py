# Generated by Django 3.1.7 on 2021-02-26 10:28

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion
import django.utils.timezone


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='DoctorSpecialization',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('specialization', models.CharField(max_length=50)),
                ('creation_date', models.DateTimeField(default=django.utils.timezone.now)),
                ('updation_date', models.DateTimeField(default=django.utils.timezone.now)),
            ],
            options={
                'verbose_name_plural': 'Doctors Specialization',
            },
        ),
        migrations.CreateModel(
            name='Doctor',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('address', models.CharField(blank=True, max_length=100, null=True)),
                ('phone_no', models.CharField(blank=True, max_length=20, null=True)),
                ('mobile_no', models.CharField(blank=True, max_length=20, null=True)),
                ('updation_date', models.DateTimeField(default=django.utils.timezone.now)),
                ('status', models.IntegerField()),
                ('working_hour', models.DateTimeField(blank=True, default=django.utils.timezone.now, null=True)),
                ('doctor', models.OneToOneField(default='', on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL)),
                ('specialization', models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to='users.doctorspecialization')),
            ],
        ),
    ]
