package com.masters.code.domain.customer;

import java.util.function.Function;

public class CustomerDtoMapper implements Function<Customer, CustomerDto> {
    @Override
    public CustomerDto apply(Customer customer) {
        return new CustomerDto(
                customer.getId(),
                customer.getName(),
                customer.getSurname(),
                customer.getBirthdate(),
                customer.getEmail(),
                customer.getCreatedAt()
        );
    }
}
