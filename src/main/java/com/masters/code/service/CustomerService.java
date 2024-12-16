package com.masters.code.service;

import com.masters.code.domain.customer.Customer;
import com.masters.code.domain.customer.CustomerDto;
import com.masters.code.domain.customer.CustomerDtoMapper;
import com.masters.code.domain.customer.CustomerRepository;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Service
public class CustomerService {
    private static final CustomerDtoMapper mapper = new CustomerDtoMapper();
    private final CustomerRepository repo;

    public CustomerService(CustomerRepository repo) {
        this.repo = repo;
    }

    public Optional<CustomerDto> findByUsername(String username) {
        return repo.findByEmail(username).map(mapper);
    }

    public CustomerDto save(Customer customer) {
        return mapper.apply(repo.save(customer));
    }
}
