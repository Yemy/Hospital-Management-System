from django.db import models
from users.models import Doctor, Patient
from django.utils import timezone


class DiseaseTypes(models.Model):
    inf = 'infectious'
    deff = 'deficiency'
    her = 'hereditary'
    ph = 'physiological'
    types = (
        (inf, 'infectious'),
        (deff, 'deficiency'),
        (her, 'hereditary'),
        (ph, 'physiological'),
    )
    type = models.CharField(choices=types, max_length=100)
    name = models.CharField(max_length=100)

    class Meta:
        verbose_name_plural = 'Types of Diseases'

    def __str__(self):
        return self.name


class Disease(models.Model):
    name = models.CharField(max_length=100)
    type = models.ForeignKey(DiseaseTypes, on_delete=models.CASCADE)
    cause = models.CharField(max_length=200, null=True, blank=True)
    symptom = models.TextField()
    prevention = models.TextField()
    treatment = models.TextField()

    class Meta:
        verbose_name_plural = 'List of Diseases'

    def __str__(self):
        return self.name


class Appointment(models.Model):
    doctor = models.ForeignKey(Doctor, null=True, on_delete=models.SET_NULL)
    patient = models.ForeignKey(Patient, null=True, on_delete=models.SET_NULL)
    appointment_time = models.DateTimeField(default=timezone.now)
    Active = 1
    InActive = 0
    status_choice = (
        (Active, 1),
        (InActive, 0),
    )
    status = models.IntegerField(choices=status_choice)
    created_date = models.DateTimeField(default=timezone.now)
    updation_date = models.DateTimeField(default=timezone.now)

    class Meta:
        verbose_name_plural = "Appointments"


class Medical_Records(models.Model):
    doctor = models.ForeignKey(Doctor, null=True, on_delete=models.SET_NULL)
    patient = models.ForeignKey(Patient, null=True, on_delete=models.SET_NULL)
    blood_pressure = models.CharField(max_length=20, null=True, blank=True)
    blood_sugar = models.CharField(max_length=20, null=True, blank=True)
    weight = models.DecimalField(max_digits=3, decimal_places=2)
    height = models.DecimalField(max_digits=3, decimal_places=2)
    temprature_in_c = models.PositiveSmallIntegerField()
    prescription = models.TextField()
    creation_date = models.DateTimeField(default=timezone.now)
    updation_date = models.DateTimeField(default=timezone.now)

    class Meta:
        verbose_name_plural = 'Current Medical Records'


# class Medical_History(models.Model):
#     doctor = models.ForeignKey(Doctor, on_delete=models.SET_NULL)
#     patient = models.ForeignKey(Patient, on_delete=models.SET_NULL)
#     blood_pressure = models.CharField(max_length=20, null=True, blank=True)
#     blood_sugar = models.CharField(max_length=20, null=True, blank=True)
#     weight = models.DecimalField(max_digits=3, decimal_places=2)
#     temprature_in_c = models.PositiveSmallIntegerField()
#     prescription = models.TextField()
#     creation_date = models.DateTimeField(default=timezone.now)
#
#
#     class Meta:
#         verbose_name_plural = 'Medical Records'
#
#     def __str__(self):
#         return = self.patient
