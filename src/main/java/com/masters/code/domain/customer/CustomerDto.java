package com.masters.code.domain.customer;

import java.time.LocalDate;
import java.time.LocalDateTime;

public record CustomerDto(
        Integer id,
        String name,
        String surname,
        LocalDate birthdate,
        String email,
        LocalDateTime createdAt
) {
}
