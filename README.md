# 📐 YACAE

YACAE shows off a proof of concept for a Clean Architecture trying to archive some goals.

> ⚠️ It is not an attempt to make a full distinction between Clean, Onion, Hexagonal, DDD, Screaming, Whatever. You may find some mixed concepts or just some borrowed names.

![The Clean Architecture](https://blog.cleancoder.com/uncle-bob/images/2012-08-13-the-clean-architecture/CleanArchitecture.jpg)

## Goals

- **Don't put the domain inside a framework's directory structure.**
- Clean Architecture's statement that the Infrastructure layer should be able to be fully replaced without affecting
  internal layers.

## The example

| Directory | Description |
| --- | --- |
| `/todo-list` |  |