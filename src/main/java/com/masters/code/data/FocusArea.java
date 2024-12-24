package com.masters.code.data;

import lombok.AllArgsConstructor;
import lombok.Getter;

@Getter
@AllArgsConstructor
public enum FocusArea {
    PROGRAMMING("Programação"),
    NETWORKING("Redes de Computador");
    private final String desc;
}
