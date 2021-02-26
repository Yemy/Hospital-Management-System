from django.db import models
from django.utils import timezone
from django.contrib.auth.models import User


class Admin(models.Model):
    admin = models.OneToOneField(User, default="", on_delete=models.CASCADE)
    Male = 'M'
    Female = 'F'
    Gender = [
        (Male, 'M'),
        (Female, 'F'),
    ]
    gender = models.CharField(max_length=1, choices=Gender, default="",)
    address = models.CharField(max_length=100, blank=True, null=True)
    phone_no = models.CharField(max_length=20, blank=True, null=True)
    mobile_no = models.CharField(max_length=20, blank=True, null=True)
    updation_date = models.DateTimeField(default=timezone.now)
    image = models.ImageField(default='default.jpg', upload_to='profile_pics', blank=True, null=True)

    class Meta:
        verbose_name_plural = 'Admin'

    def __str__(self):
        return self.admin.username


class DoctorSpecialization(models.Model):
    specialization = models.CharField(max_length=50)
    creation_date = models.DateTimeField(default=timezone.now)
    updation_date = models.DateTimeField(default=timezone.now)

    class Meta:
        verbose_name_plural = 'Doctors Specialization'

    def __str__(self):
        return self.specialization


class Doctor(models.Model):
    doctor = models.OneToOneField(User, default="", on_delete=models.CASCADE)
    specialization = models.ForeignKey(DoctorSpecialization, null=True, blank=True, on_delete=models.SET_NULL)
    address = models.CharField(max_length=100, blank=True, null=True)
    phone_no = models.CharField(max_length=20, blank=True, null=True)
    mobile_no = models.CharField(max_length=20, blank=True, null=True)
    updation_date = models.DateTimeField(default=timezone.now)
    Male = 'M'
    Female = 'F'
    Gender = [
        (Male, 'M'),
        (Female, 'F'),
    ]
    gender = models.CharField(max_length=1, choices=Gender, default="",)
    working_hour = models.DateTimeField(default=timezone.now, blank=True, null=True)
    Active = 1
    InActive = 0
    status_choice = (
        (Active, 1),
        (InActive, 0),
    )
    status = models.IntegerField(choices=status_choice)
    image = models.ImageField(default='default.jpg', upload_to='profile_pics', blank=True, null=True)

    class Meta:
        verbose_name_plural = 'Doctors'

    def __str__(self):
        return self.doctor.username


class Patient(models.Model):
    patient = models.OneToOneField(User, default="", on_delete=models.CASCADE)
    address = models.CharField(max_length=100, blank=True, null=True)
    mobile_no = models.CharField(max_length=20, blank=True, null=True)
    age = models.PositiveSmallIntegerField()
    Male = 'M'
    Female = 'F'
    Gender = [
        (Male, 'M'),
        (Female, 'F'),
    ]
    gender = models.CharField(max_length=1, choices=Gender, default="",)
    Active = 1
    InActive = 0
    status_choice = (
        (Active, 1),
        (InActive, 0),
    )
    status = models.IntegerField(choices=status_choice)
    image = models.ImageField(default='default.jpg', upload_to='profile_pics', blank=True, null=True)
    creation_date = models.DateTimeField(default=timezone.now)
    updation_date = models.DateTimeField(default=timezone.now)

    class Meta:
        verbose_name_plural = 'Patients'

    def __str__(self):
        return self.patient.username
