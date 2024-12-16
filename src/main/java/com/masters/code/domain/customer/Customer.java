package com.masters.code.domain.customer;

import com.masters.code.data.Sexo;
import jakarta.persistence.*;
import jakarta.validation.constraints.Email;
import jakarta.validation.constraints.NotBlank;
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;

import java.io.Serial;
import java.io.Serializable;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.util.Collection;
import java.util.List;
import java.util.Objects;

import static jakarta.persistence.TemporalType.DATE;
import static jakarta.persistence.TemporalType.TIMESTAMP;

@Entity
@Table(name = "cliente")
public class Customer implements Serializable, Comparable<Customer>, UserDetails {

    @Serial
    private static final long serialVersionUID = 1L;

    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Integer id;

    @NotBlank(message = "O name é obrigatório")
    private String name;

    @NotBlank(message = "O surname é obrigatório")
    private String surname;

    @Temporal(DATE)
    private LocalDate birthdate;

    @Enumerated(EnumType.STRING)
    private Sexo sex;

    @Temporal(TIMESTAMP)
    @Column(updatable = false)
    private LocalDateTime createdAt;

    @Email(message = "Email inválido")
    @Column(unique = true)
    private String email;

    private String password;

    //<editor-fold desc="Constructors">
    public Customer() {
        super();
    }

    public Customer(String name, String surname) {
        this.name = name;
        this.surname = surname;
    }
    //</editor-fold>

    //<editor-fold desc="Getters and Setters">
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getSurname() {
        return surname;
    }

    public void setSurname(String surname) {
        this.surname = surname;
    }

    public LocalDate getBirthdate() {
        return birthdate;
    }

    public void setBirthdate(LocalDate dataDeNascimento) {
        this.birthdate = dataDeNascimento;
    }

    public Sexo getSex() {
        return sex;
    }

    public void setSex(Sexo sex) {
        this.sex = sex;
    }

    public LocalDateTime getCreatedAt() {
        return createdAt;
    }

    public void setCreatedAt(LocalDateTime createdAt) {
        this.createdAt = createdAt;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @Override
    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    @Override
    public String getUsername() {
        return email;
    }

    @Override
    public Collection<? extends GrantedAuthority> getAuthorities() {
        return List.of(new SimpleGrantedAuthority("USER"));
    }
    //</editor-fold>

    //<editor-fold desc="Equals, HashCode and other implementations">
    @Override
    public String toString() {
        return "Customer{" +
                "id=" + id +
                ", name='" + name + '\'' +
                ", surname='" + surname + '\'' +
                ", birthdate=" + birthdate +
                ", sex=" + sex +
                ", createdAt=" + createdAt +
                ", email='" + email + '\'' +
                ", password='" + password + '\'' +
                '}';
    }

    @Override
    public boolean equals(Object o) {
        if (!(o instanceof Customer customer)) return false;
        return Objects.equals(getId(), customer.getId()) && Objects.equals(getName(), customer.getName()) && Objects.equals(getSurname(), customer.getSurname()) && Objects.equals(getEmail(), customer.getEmail());
    }

    @Override
    public int hashCode() {
        return Objects.hash(getId(), getName(), getSurname(), getEmail());
    }

    @Override
    public int compareTo(Customer o) {
        return name.compareTo(o.name);
    }
    //</editor-fold>

    @PrePersist
    public void prePersist() {
        createdAt = LocalDateTime.now();
    }
}
