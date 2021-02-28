from django.contrib import admin
from .models import (DiseaseTypes,
                    Disease,
                    Appointment,
                    Medical_Records,
                    )


class DiseaseTypesAdmin(admin.ModelAdmin):
    list_display = ('name', 'type', )
    search_fields = ('name', )
    list_filter = ['type', ]


class DiseaseAdmin(admin.ModelAdmin):
    list_display = ('name', 'type', 'cause', )
    search_fields = ('name', 'cause', )
    list_filter = ('type', 'cause', )


class AppointmentAdmin(admin.ModelAdmin):
    list_display = ('doctor', 'patient', 'appointment_time', 'status')
    search_fields = ('appointment_time', )
    list_filter = ['status', 'appointment_time', 'created_date', 'doctor', ]


class Medical_RecordsAdmin(admin.ModelAdmin):
    list_display = ('doctor', 'patient', 'blood_pressure', 'blood_sugar', 'weight', 'height', 'temprature_in_c',)
    search_fields = ('created_date', 'updation_date', )
    list_filter = ['blood_pressure', 'blood_sugar', 'doctor']


admin.site.register(DiseaseTypes, DiseaseTypesAdmin)
admin.site.register(Disease, DiseaseAdmin)
admin.site.register(Appointment, AppointmentAdmin)
