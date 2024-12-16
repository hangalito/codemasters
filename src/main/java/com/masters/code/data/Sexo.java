package com.masters.code.data;

public enum Sexo {
    MALE("M", "Masculino"),
    FEMALE("F", "Feminino");
    private final String shortForm;
    private final String longForm;

    Sexo(String shortForm, String longForm) {
        this.shortForm = shortForm;
        this.longForm = longForm;
    }

    public String getShortForm() {
        return shortForm;
    }

    public String getLongForm() {
        return longForm;
    }
}
